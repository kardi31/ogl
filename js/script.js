$(document).ready(function(){
	
	// Run the init method on document ready:
	chat.init();
	
});

function add_emo(emo)
{
	document.getElementById('chatText').value+=emo;
}

function setCookie(c_name,value,exdays)
{
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString())+";path=/";
	document.cookie=c_name + "=" + c_value;
}

function hide_cookie_alert()
{
	setCookie("cookie_off","1",1);
	document.getElementById("cookie_alert").style.display="none";
	return false;
}

function chat_go(id)
{

	var datat = Math.round((new Date()).getTime() / 1000);
	setCookie("chat_"+id,datat,1);
	$('#'+$('#room').val()).css("color","");
	$('.jspPane').html("");
	$('#room').val(id);
	$('#'+id).css("color","red");
	$('#user_ile_'+id).remove();
	$('#glowny').css("font-weight","");
	chat.data.lastID=0;

}

var chat = {
	
	// data holds variables for use in the class:
	
	data : {
		lastID 		: 0,
		noActivity	: 0
	},
	
	// Init binds event listeners and sets up timers:
	
	init : function(){
	
		$('#glowny').click(function (e) {
			var datat = Math.round((new Date()).getTime() / 1000);
			setCookie("chat_0",datat,1);
			$('#glowny').css("font-weight","bold");
			$('#'+$('#room').val()).css("color","");chatLineHolder
			$('.jspPane').html("");
			$('#room').val("0");
			chat.data.lastID=0;


			e.preventDefault();
			e.stopPropagation(); 
		});

		// Using the defaultText jQuery plugin, included at the bottom:
		$('#name').defaultText('Login');
		$('#email').defaultText('Email');
		
		// Converting the #chatLineHolder div into a jScrollPane,
		// and saving the plugin's API in chat.data:
		
		chat.data.jspAPI = $('#chatLineHolder').jScrollPane({
			verticalDragMinHeight: 12,
			verticalDragMaxHeight: 12
		}).data('jsp');
		
		// We use the working variable to prevent
		// multiple form submissions:
		
		var working = false;
		
		// Logging a person in the chat:
		
		$('#loginForm').submit(function(){
			
			if(working) return false;
			working = true;
			
			// Using our tzPOST wrapper function
			// (defined in the bottom):
			
			$.tzPOST('login',$(this).serialize(),function(r){
				working = false;
				
				if(r.error){
					chat.displayError(r.error);
				}
				else chat.login(r.name,r.gravatar);
			});
			
			return false;
		});
		
		// Submitting a new chat entry:
		
		$('#submitForm').submit(function(){
			
			var text = $('#chatText').val();
			var room = $('#room').val();
			var room_od = $('#room_od').val();

			if(text.length == 0){
				return false;
			}
			
			if(working) return false;
			working = true;
			
			// Assigning a temporary ID to the chat:
			var tempID = 't'+Math.round(Math.random()*1000000),
				params = {
					id			: tempID,
					author		: chat.data.name,
					gravatar	: chat.data.gravatar,
					text		: text.replace(/</g,'&lt;').replace(/>/g,'&gt;')
				};

			// Using our addChatLine method to add the chat
			// to the screen immediately, without waiting for
			// the AJAX request to complete:
			
			chat.addChatLine($.extend({},params));
			
			// Using our tzPOST wrapper method to send the chat
			// via a POST AJAX request:
			
			$.tzPOST('submitChat',$(this).serialize(),function(r){
				working = false;
				//alert("a");
				$('#chatText').val('');
				$('div.chat-'+tempID).remove();
				
				params['id'] = r.insertID;
				chat.addChatLine($.extend({},params));
			});
			var datat = Math.round((new Date()).getTime() / 1000);
			setCookie("chat_"+room,datat,1);
			return false;
		});
		
		// Logging the user out:
		
		$('#logoutButton').live('click',function(){
			$("#logoutButton").remove();
			setCookie("chat_0","off",1);
			var datat = Math.round((new Date()).getTime() / 1000);
			setCookie("chat_last",datat,1);
			$('#submitForm').fadeOut(function(){
				$('#chatTextemo').hide();
				$('#loginForm').fadeIn();

			});
			
			$.tzPOST('logout');
			
			return false;
		});
		
		// Checking whether the user is already logged (browser refresh)
		
		$.tzGET('checkLogged',function(r){
			if(r.logged){
				chat.login(r.loggedAs.name,r.loggedAs.gravatar);
			}
		});
		
		// Self executing timeout functions
		
		(function getChatsTimeoutFunction(){
			chat.getChats(getChatsTimeoutFunction);
		})();
		
		(function getUsersTimeoutFunction(){
			chat.getUsers(getUsersTimeoutFunction);
		})();
		
	},
	
	// The login method hides displays the
	// user's login data and shows the submit form
	
	login : function(name,gravatar){
		
		chat.data.name = name;
		chat.data.gravatar = gravatar;
		$('#logu').html(chat.render('loginTopBar',chat.data));
		var datat = Math.round((new Date()).getTime() / 1000);
		setCookie("chat_0",datat,1);
	    setCookie("chat_on","oon",1);
		$('#loginForm').fadeOut(function(){
			$('#submitForm').fadeIn();
			$('#chatText').focus();
			$('#chatTextemo').show();
		});
		
	},
	
	// The render method generates the HTML markup 
	// that is needed by the other methods:
	
	render : function(template,params){
		
		var arr = [];
		switch(template){
			case 'loginTopBar':
				arr = [
				'<a href="" class="logoutButton rounded" id="logoutButton">Wyłącz</a>'];
			break;
			
			case 'chatLine':
				arr = [
					'<div class="chat chat-',params.id,' rounded"><span class="author">',params.author,
					':</span><br><span class="text">',params.text,'</span><span class="time">',params.time,'</span></div>'];
			break;
			
			case 'user':
				arr = [
					'<div class="user" title="',params.name,'">- <b><a href="javascript:chat_go(',params.gravatar,')" id="',params.gravatar,'">',params.name,' </a> ',params.ile_a,'</b></div>'
				];
			break;
		}
		
		// A single array join is faster than
		// multiple concatenations
		
		return arr.join('');
		
	},
	
	// The addChatLine method ads a chat entry to the page
	
	addChatLine : function(params){
		
		// All times are displayed in the user's timezone
		
		var d = new Date();
		if(params.time) {
			
			// PHP returns the time in UTC (GMT). We use it to feed the date
			// object and later output it in the user's timezone. JavaScript
			// internally converts it for us.
			
			d.setUTCHours(params.time.hours,params.time.minutes);
		}
		
		params.time = (d.getHours() < 10 ? '0' : '' ) + d.getHours()+':'+
					  (d.getMinutes() < 10 ? '0':'') + d.getMinutes();
		
		var markup = chat.render('chatLine',params),
			exists = $('#chatLineHolder .chat-'+params.id);

		if(exists.length){
			exists.remove();
		}

		if(!chat.data.lastID){
			// If this is the first chat, remove the
			// paragraph saying there aren't any:
			
			$('#chatLineHolder p').remove();
		}
		
		// If this isn't a temporary chat:
		if(params.id.toString().charAt(0) != 't'){
			var previous = $('#chatLineHolder .chat-'+(+params.id - 1));
			if(previous.length){
				previous.after(markup);
			}
			else chat.data.jspAPI.getContentPane().append(markup);
			
					chat.data.jspAPI.reinitialise();
		chat.data.jspAPI.scrollToBottom(true);
		}
		else chat.data.jspAPI.getContentPane().append(markup);
		
		// As we added new content, we need to
		// reinitialise the jScrollPane plugin:
		

		
	},
	
	// This method requests the latest chats
	// (since lastID), and adds them to the page.
	
	getChats : function(callback){
		var get_room=$('#room').val();
		var get_room_od=$('#room_od').val();

		$.tzGET('getChats',{lastID: chat.data.lastID,room:get_room,room_od:get_room_od},function(r){
			
			for(var i=0;i<r.chats.length;i++){
				chat.addChatLine(r.chats[i]);
			}
			
			if(r.chats.length){
				chat.data.noActivity = 0;
				chat.data.lastID = r.chats[i-1].id;
			}
			else{
				// If no chats were received, increment
				// the noActivity counter.
				
				chat.data.noActivity++;
			}
			
			if(!chat.data.lastID){
				chat.data.jspAPI.getContentPane().html('<p class="noChats">Brak</p>');
			}
			
			// Setting a timeout for the next request,
			// depending on the chat activity:
			
			var nextRequest = 5000;
			
			// 2 seconds
			if(chat.data.noActivity > 3){
				nextRequest = 30000;
			}
			
			if(chat.data.noActivity > 10){
				nextRequest = 40000;
			}
			
			// 15 seconds
			if(chat.data.noActivity > 20){
				nextRequest = 60000;
			}
		
			setTimeout(callback,nextRequest);
		});
	},
	
	// Requesting a list with all the users.
	
	getUsers : function(callback){
		$.tzGET('getUsers',function(r){
			
			var users = [];
			
			for(var i=0; i< r.users.length;i++){
				if(r.users[i]){
					users.push(chat.render('user',r.users[i]));
				}
			}
			
			var message = '';
			
			if(r.total<1){
				message = 'Brak innych użytkowników online';
			}
			else {
				message = 'Osób online: '+r.total;
			}
			
			users.push('<p class="count">'+message+'</p>');
			
			$('#chatUsers').html(users.join(''));
			
			setTimeout(callback,35000);
		});
	},
	
	// This method displays an error message on the top of the page:
	
	displayError : function(msg){
		var elem = $('<div>',{
			id		: 'chatErrorMessage',
			html	: msg
		});
		
		elem.click(function(){
			$(this).fadeOut(function(){
				$(this).remove();
			});
		});
		
		setTimeout(function(){
			elem.click();
		},5000);
		
		elem.hide().appendTo('body').slideDown();
	}
};

// Custom GET & POST wrappers:

$.tzPOST = function(action,data,callback){
	$.post('php/ajax.php?action='+action,data,callback,'json');
}

$.tzGET = function(action,data,callback){
	$.get('php/ajax.php?action='+action,data,callback,'json');
}

// A custom jQuery method for placeholder text:

$.fn.defaultText = function(value){
	
	var element = this.eq(0);
	element.data('defaultText',value);
	
	element.focus(function(){
		if(element.val() == value){
			element.val('').removeClass('defaultText');
		}
	}).blur(function(){
		if(element.val() == '' || element.val() == value){
			element.addClass('defaultText').val(value);
		}
	});
	
	return element.blur();
}