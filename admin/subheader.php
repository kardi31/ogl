<?php 
session_start();

include('../db_connect.php');
include("../include/ust.php");

if($_COOKIE['lang']<>"" and isset($_COOKIE['lang']) and strlen($_COOKIE['lang'])<=3)
{
	$u_usr['lang']=substr($_COOKIE['lang'],0,3);
}
else
{
	$u_usr['lang']=$ust['lang_d'];
}


include("../lang/".$u_usr['lang']."/admin.php");

include('namen.php');
include('../include/login.php');
include('../include/function.php');
if($_SESSION['logadm']=="adm")
{

if(isset($_POST['send_user']))
{

	if($_POST['tytul']<>"" and $_POST['tresc']<>"")
	{

		if($_POST['do']=="1")
		{
			$ord=' WHERE  user_akt="1"';
		}
		else if($_POST['do']=="2")
		{
			$ord=' WHERE  user_akt="0"';
		}
		else
		{
			$ord='';
		}	
		$ile=0;
		
		require_once('../include/phpmail/class.phpmailer.php');
		require_once('../include/phpmail/class.smtp.php');
		
		$Query='SELECT * FROM '.$pre.'user '.$ord.''; 
		$result = db_query($Query) or die(db_error());
		while($row=db_fetch($result))
		{
			$tresc=$_POST['tresc'];
			$tytul=$_POST['tytul'];

			$tresc=str_replace("{imie}",$row['user_nazwak'],$tresc);
			$tresc=str_replace("{login}",$row['user_login'],$tresc);
			$tresc=str_replace("{data_r}",$row['user_data_r'],$tresc);
			$tresc=str_replace("{data_o}",$row['user_data_o'],$tresc);

			$tytul=str_replace("{imie}",$row['user_nazwak'],$tytul);
			$tytul=str_replace("{login}",$row['user_login'],$tytul);
			$tytul=str_replace("{data_r}",$row['user_data_r'],$tytul);
			$tytul=str_replace("{data_o}",$row['user_data_o'],$tytul);

			$subject=$tytul;
			$mail=$row['user_email'];

			$body = $tresc;
			$head = "From: ".$ust['email']." <".$ust['email'].">";
			$head .= "\r\n";
			$head .= "Content-type: text/html; charset=UTF-8\r\n";
			
			if($_POST['typ']=="1")
			{
				@nw_mail($ust['email'],$mail, $subject, $body, $head,"1");
			}
			else
			{
				$in="INSERT INTO ".$pre."pw(`pw_tytul`, `pw_tresc`, `pw_od`, `pw_do`, `pw_data`, `pw_typ`)VALUE('".$tytul."','".$tresc."', '".htmlspecialchars($_SESSION['user_id'])."', '".$row['user_id']."', NOW(), '1')";
				db_query($in);
			}
			$ile++;
		}

		header("Location: ".$ust['adres']."admin/index.php?page=user&e=1000&ile=".$ile."");
		exit();
	}
	else
	{
		$send_u_tytul=$_POST['tytul'];
		$send_u_tresc=$_POST['tresc'];
		$send_u_typ=$_POST['typ'];
		$send_u_do=$_POST['do'];
		$send_u_e="1";
	}

}

//-------------------------
if($_POST['addcatg'])
{

if($_POST['nazwa']!="")
{

include("include/add_cat_img.php");

$fotm = @imggd($ust);

$in="INSERT INTO `".$pre."gift`(`gi_nazwa`, `gi_img`, `gi_money`, `gi_cena`) VALUES ('".$_POST['nazwa']."', '".$fotm."', '".$_POST['money']."', '".$_POST['cena']."')";
db_query($in);

header("Location: ".$ust['adres']."admin/index.php?page=gift&e=1");
exit();

}
else
{
header("Location: ".$ust['adres']."admin/index.php?page=gift&e=t");
exit();
}

}
//-------------------------
if($_POST['upcatg'])
{

if($_POST['nazwa']!="")
{

include("include/add_cat_img.php");

$fotm = @imggd($ust);


if($_POST['del']==1 AND $fotm=="")
{
$up="UPDATE ".$pre."gift SET ga_img='', gi_nazwa='".htmlspecialchars($_POST['nazwa'])."', gi_money='".htmlspecialchars($_POST['money'])."', gi_cena='".htmlspecialchars($_POST['cena'])."' WHERE gi_id='".db_real_escape_string($_GET['id'])."'";
db_query($up);
}
else if($fotm=="")
{
$up="UPDATE ".$pre."gift SET gi_nazwa='".htmlspecialchars($_POST['nazwa'])."', gi_money='".htmlspecialchars($_POST['money'])."', gi_cena='".htmlspecialchars($_POST['cena'])."' WHERE gi_id='".db_real_escape_string($_GET['id'])."'";
db_query($up);
}
else if($fotm!="")
{
$up="UPDATE ".$pre."gift SET gi_img='".$fotm."', gi_nazwa='".htmlspecialchars($_POST['nazwa'])."', gi_money='".htmlspecialchars($_POST['money'])."', gi_cena='".htmlspecialchars($_POST['cena'])."' WHERE gi_id='".db_real_escape_string($_GET['id'])."'";
db_query($up);
}


header("Location: ".$ust['adres']."admin/index.php?page=gift&e=2");
exit();
}
else
{
header("Location: ".$ust['adres']."admin/index.php?page=galerie&e=t");
exit();
}

}}

//-------------------------
?>
<html>
<head>
<title>Panel administracyjny</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style/default.css" type="text/css" />

<script type="text/javascript" language="javascript" src="js/ColorPicker2.js"></script>
<script type="text/javascript" language="javascript" src="js/AnchorPosition.js"></script>
<script type="text/javascript" language="javascript" src="js/PopupWindow.js"></script>
<script type="text/javascript" language="javascript" src="js/rgbcolor.js"></script>
<script type="text/javascript" language="javascript" src="js/function.js"></script>
   <script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
   <script type="text/javascript">
<?php 
if($_SESSION['logadm']=="adm")
{
if($ust['edytor']=="2")
{
?>



	tinyMCE.init({
		// General options
		mode : "exact",
                language: "<?php echo $lang['1'];?>",
		elements : "elm1",
		theme : "advanced",
		skin : "o2k7",
		skin_variant : "silver",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",



		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});


<?php 
}
if($ust['edytor']=="1")
{
?>

tinyMCE.init({
		// General options
		mode : "exact",
                language: "<?php echo $lang['1'];?>",
		elements : "elm1",
		theme : "advanced",
		skin : "o2k7",
		skin_variant : "silver",
		plugins : "",

                theme_advanced_buttons1 : "bold,italic,underline,justifyleft,justifycenter,justifyright,justifyfull,undo,redo,link,unlink,forecolor,code",
                theme_advanced_buttons2 : "",
                theme_advanced_buttons3 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",



		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}

		
	});
<?php 
}
}
?>
function toggleEditor(id) {

if (!tinyMCE.get(id))
{
tinyMCE.execCommand('mceAddControl', false, id);
}
else
{
tinyMCE.execCommand('mceRemoveControl', false, id);
}

}
</script>
<!-- /TinyMCE -->

<SCRIPT LANGUAGE="JavaScript">
var cp = new ColorPicker('window'); 
var cp2 = new ColorPicker(); 
</SCRIPT>




</head>
<body >


<script>

function ukryj() {

document.getElementById("ukryj").style.display="none";
}


setTimeout("ukryj()",5000);

</script>

<?php 

if($_SESSION['logadm']!="adm")
{

echo'
<br><br>
<center>
<div class="login_f">
<table style="height:180px;width:280px;">
<tr>
<tr><td colspan="2" style="border-bottom: 1px solid rgb(204, 204, 204);padding-bottom:10px;" align="center"><b style="color:white;font-size:14px;">'.$lang['220'].'</b></td></tr>
<td style="padding-top:5px;" valign="top" align="left"><img src="style/images/lock.png"></td>
<td style="padding-top:5px;"  valign="top" align="left">

<form method="post" action="">
<table>
<tr>
<td><b style="color:white;font-size:12px;">'.$lang['2'].'</b></td><td>
<input  type="text" name="login" value="" /></td>
</tr>
<tr>
<tr>
<td><b style="color:white;font-size:12px;">'.$lang['3'].'</b></td><td>
<input  type="password" name="haslo" value="" /></tr></tr></table>
<input  type="submit" name="login_user" value="'.$lang['4'].'" />
<br><br>
';if($_SESSION['logadm']=="error"){echo'<span id="ukryj" style="color:red;font-weight:bold;font-size:12px;">'.$lang['5'].'</span>';}$_SESSION['logadm']="";echo'

</form>



</td>
</tr>

<tr>
<td align="left" colaspn="2">
<a href="../"><img src="style/images/website.png" width="20" border="0" title="'.$lang['6'].'"></a>
</td>

</tr>
</table>
</div>
</center>
';

}


if($_SESSION['logadm'] == "adm")
{
echo'
<table width="1005" style="margin:0 auto 0 auto;" rules="cols" cellpadding="10">
<tr>
<td width="100%" valign="top" align="center">
<br>
<table>
<tr>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="../" style="text-decoration:none;font-size:12px;"><img src="style/images/website.png" title="Przejdz do strony glownej"><br>'.$lang['7'].'</a></td>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="index.php?page=news" style="text-decoration:none;font-size:12px;"><img src="style/images/news48.png"><br>Ważne info</a></td>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="index.php?page=strony" style="text-decoration:none;font-size:12px;"><img src="style/images/p48.png"><br>'.$lang['9'].'</a></td>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="index.php?page=faq" style="text-decoration:none;font-size:12px;"><img src="style/images/faq48.png"><br>Ogłoszenia</a></td>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="index.php?page=zgloszenia" style="text-decoration:none;font-size:12px;"><img src="style/images/reuser48.png"><br>'.$lang['12'].'</a></td>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="index.php?page=gift" style="text-decoration:none;font-size:12px;"><img src="style/images/gift48.png"><br>'.$lang['13'].'</a></td>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="index.php?page=user" style="text-decoration:none;font-size:12px;"><img src="style/images/user48.png"><br>'.$lang['14'].'</a></td>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="index.php?page=zamowienia" style="text-decoration:none;font-size:12px;"><img src="style/images/cash48.png"><br>'.$lang['15'].'</a></td>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="index.php?page=menu" style="text-decoration:none;font-size:12px;"><img src="style/images/m48.png"><br>'.$lang['16'].'</a></td>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="index.php?page=ustawienia"  style="text-decoration:none;font-size:12px;"><img src="style/images/ust48.png"><br>'.$lang['17'].'</a></td>
<td style="border: 1px solid rgb(204, 204, 204);width:80px;" class="td_hover" align="center" valign="top"><a href="../logout.php"  style="text-decoration:none;font-size:12px;"><img src="style/images/lock48.png"><br>'.$lang['18'].'</a></td>
</tr>
</table>
<br>
<div id="login" class="boxed">
<div class="content">&nbsp;';

if($_GET['page']=="" or $_GET['page']=="ustawienia"){echo'<b style="color:white;">'.$lang['19'].'</b>';}
if($_GET['page']=="news"){echo'<b style="color:white;">Ważne info</b>';}
if($_GET['page']=="gift"){echo'<b style="color:white;">'.$lang['21'].'</b>';}
if($_GET['page']=="menu"){echo'<b style="color:white;">'.$lang['22'].'</b>';}
if($_GET['page']=="faq"){echo'<b style="color:white;">Ogłoszenia</b>';}
if($_GET['page']=="artykuly"){echo'<b style="color:white;">'.$lang['24'].'</b>';}
if($_GET['page']=="user"){echo'<b style="color:white;">'.$lang['25'].'</b>';}
if($_GET['page']=="zamowienia"){echo'<b style="color:white;">'.$lang['26'].'</b>';}
if($_GET['page']=="zgloszenia"){echo'<b style="color:white;">'.$lang['27'].'</b>';}
if($_GET['page']=="strony"){echo'<b style="color:white;">'.$lang['28'].'</b>';}
if($_GET['page']=="cat"){echo'<b style="color:white;">'.$lang['29'].'</b>';}
if($_GET['page']=="galerie"){echo'<b style="color:white;">'.$lang['30'].'</b>';}
if($_GET['page']=="komentarze"){echo'<b style="color:white;">'.$lang['31'].'</b>';}



echo'</div></div>
</td>
</tr>
<tr>
<td width="100%" valign="top" align="center">



';
}
?>