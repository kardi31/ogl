<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="/"/>
<meta http-equiv="content-type" content="text/html; charset={$lang[0]}" />

<title>{$title}</title>
<meta name="keywords" content="{$meta_key}" />
<meta name="description" content="{if $omnie<>"" and !$omnie|is_array}{$omnie|strip_tags|substr:0:250}{else}{$meta_desc}{/if}" />



<link href="/js/multiple-select-master/multiple-select.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<link href="templates/{$templa}/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/js/jQuery2.js"></script>
<script type="text/javascript" src="/js/overlib_red2.js"><!-- overLIB (c) Erik Bosrup --></script>
{literal}
 <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white',
 
 };
 </script>
{/literal}

	<script>
	var czat_url='<iframe frameborder="0" scrolling="no" width="800" height="680" src="/ajax-chat.php?id={$czat_id}&user={$czat_login}"></iframe>';
	{literal}
		$(document).ready(function(){
			$('#chat_open').click(function (e) {
				$( "#dialog-modal" ).dialog({
					height: 620,
					width: 780,

					modal: true,
					open: function () {
					 $('#dialog-modal').css('overflow', 'hidden');
					  $("#dialog-modal").html(czat_url);
					setCookie("chat_akt","1",1);
					 $("#ile_chat_user").html("");
					 setCookie("chat_on","off",1);
					},
					  close: function () {
								$("#dialog-modal").html("");
								setCookie("chat_akt","0",1);
								setCookie("chat_0","off",1);
								var datat = Math.round((new Date()).getTime() / 1000);
								setCookie("chat_last",datat,1);
						},
									
				});
				e.preventDefault();
				e.stopPropagation(); 
			});
			$('#chat_open2').click(function (e) {
				$( "#dialog-modal" ).dialog({
					height: 620,
					width: 780,

					modal: true,
					open: function () {
					 $('#dialog-modal').html();
					 $('#dialog-modal').css('overflow', 'hidden');
					setCookie("chat_akt","1",1);
					 $("#dialog-modal").html(czat_url);
					 setCookie("chat_on","off",1);
					},
					  close: function () {
								 $("#dialog-modal").html("");
								setCookie("chat_akt","0",1);
								setCookie("chat_0","off",1);
								var datat = Math.round((new Date()).getTime() / 1000);
								setCookie("chat_last",datat,1);
						},
									
				});
				e.preventDefault();
				e.stopPropagation(); 
			});
		});
	</script>
	
{/literal}

{if $user_id>=1}
	{literal}
		<script>
			get_ile_chat();
			$(function(){
				setInterval(get_ile_chat, 60000);
			});
		</script>
	{/literal}
{/if}
{literal}
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'pl'}
</script>
{/literal}
</head>

<body>
{literal}
<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
{/literal}
<div id="dialog-modal" title="Chat" style="display:none;background:#323232;">

</div>