function get_ile_chat()
{
	$.get("chatile.php", { action: "sms" },
	function(data)
	{	 
	
		if(data!="")
		{
		
			$('#ile_chat_user').html(data);
			
		
		}

	});
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

function rating(id,ocena,ile){

for(i=ile;i>=ocena;i--)
{
document.getElementById("b"+i).style.background = "";
}

for(i=1;i<=ocena;i++)
{
document.getElementById("b"+i).style.display="";
document.getElementById("b"+i).style.background = "url(images/1.png)";

}

}

function cena_pkt(cenapkt){

	var cpk=parseInt(document.getElementById("ilepkt").value)*cenapkt;
	
	if(cpk <= 100000 ){document.getElementById("but").style.display="";document.getElementById("per").style.display="none";document.getElementById("cenapkt").innerHTML=cpk.toFixed(2);}else{document.getElementById("but").style.display="none";document.getElementById("per").style.display="";document.getElementById("cenapkt").innerHTML="0.00";}
	
}



function potwierdz()
{
  if (confirm("Czy na pewno chesz skasowaæ?")==false)
  return false;
}


function ukryj() {

document.getElementById("ukryj").style.display="none";
}



setTimeout("ukryj()",8000);

function openemot(){
document.getElementById("emot").style.display="";
}
function closeemot(){
document.getElementById("emot").style.display="none";
}