<?php 
if($indexphp!="ok"){exit();}
echo'
<center><br>
<table width="150">
<tr>
<td width="100%" class="td_hover"'; if($_GET['action']=="send"){echo' bgcolor="#ffb217"';} echo'style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=user&action=send" >Wyślij wiadomości</td>

</tr>
</table></center>
';
if($_GET['action']=="")
{

echo'<center>';


if($_GET['v']=="delete")
{
$del="DELETE FROM ".$pre."user WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
$del="DELETE FROM ".$pre."szukam WHERE s_user='".db_real_escape_string($_GET['id'])."'";
db_query($del);
$del="DELETE FROM ".$pre."ankieta WHERE a_user='".db_real_escape_string($_GET['id'])."'";
db_query($del);

$Query='SELECT * FROM '.$pre.'friend WHERE fo_od="'.db_real_escape_string($_GET['id']).'" or fo_do="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $del="DELETE FROM ".$pre."friend WHERE fo_id='".$row['fo_id']."'";
   db_query($del);
}

$Query='SELECT * FROM '.$pre.'foto WHERE fo_user="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   @unlink("../upload/zdjecia/".$row['fo_fm']);
   @unlink("../upload/zdjecia/".$row['fo_fd']);
   $del="DELETE FROM ".$pre."foto WHERE fo_id='".$row['fo_id']."'";
   db_query($del);
}


echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['162'].'</b></center></div></div><br>';

}
if($_GET['v']=="addadm")
{
$del="UPDATE ".$pre."user SET user_t='3' WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['163'].'</b></center></div></div><br>';
}
if($_GET['v']=="akt")
{
$del="UPDATE ".$pre."user SET user_akt='1' WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['164'].'</b></center></div></div><br>';
}
if($_GET['v']=="dakt")
{
$del="UPDATE ".$pre."user SET user_akt='0' WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['165'].'</b></center></div></div><br>';
}
if($_GET['v']=="chat_on")
{
$del="UPDATE ".$pre."user SET user_chat='' WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>Dostęp do chat aktywowany</b></center></div></div><br>';
}
if($_GET['v']=="chat_off")
{
$del="UPDATE ".$pre."user SET user_chat='1' WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>Dostęp do chat wyłączony</b></center></div></div><br>';
}
if($_GET['v']=="readm")
{
$del="UPDATE ".$pre."user SET user_t='1' WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['166'].'</b></center></div></div><br>';
}


if($_GET['sort']=="asc"){$sort="ASC";}
else if($_GET['sort']=="desc"){$sort="DESC";}
else{$sort="DESC";}

if($_GET['q']=="login"){$q="user_login";}
else if($_GET['q']=="adm"){$q="user_t";}
else if($_GET['q']=="vip"){$q="user_vip";}
else if($_GET['q']=="id"){$q="user_id";}
else {$q="user_id";}

if($_GET['query']!=""){$query='WHERE user_id="'.$_GET['query'].'" or user_login="'.$_GET['query'].'"';}

echo'

<center>
<form action="index.php" method="GET">
<input type="hidden" value="user" name="page">

<table  width="1000">
<tr>
<td align="left" width="50%">
<table>
<tr>
<td>'.$lang['167'].' <select name="sort" onchange="this.form.submit()">
<option value="asc"';if($sort=="ASC" or $sort==""){echo'selected="selected"';}echo'>'.$lang['168'].'</option>
<option value="desc"';if($sort=="DESC"){echo'selected="selected"';}echo'>'.$lang['169'].'</option>
</select>
</td>
<td>'.$lang['170'].' <select name="q" onchange="this.form.submit()">
<option value="id"';if($q=="user_id" or $sort==""){echo'selected="selected"';}echo'>'.$lang['171'].'</option>
<option value="login"';if($q=="user_login"){echo'selected="selected"';}echo'>'.$lang['172'].'</option>
<option value="adm"';if($q=="user_t"){echo'selected="selected"';}echo'>'.$lang['173'].'</option>
<option value="vip"';if($q=="user_vip"){echo'selected="selected"';}echo'>'.$lang['174'].'</option>
</select>
</td>
</tr>
</table>
</td>
<td align="right" width="50%">
<table>
<tr>
<td>'.$lang['175'].'<input type="text" name="query" value="'.$_GET['query'].'">
<td><input type="submit" value="'.$lang['176'].'"></td>
</tr></table>
</td>
</tr>
</table>

</form><br>





</center>
<table width="1000" cellspacing="0" cellpadding="0" style="border: 1px solid #cccccc;">
<tr>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['177'].'</b></td>
<td width="25%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['178'].'</b></td>
<td width="25%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['179'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['180'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['181'].'</b></td>
<td width="8%" background="style/images/belka.gif" height="24" align="center"><b>CHAT</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['182'].'</b></td>
<td width="8%" background="style/images/belka.gif" height="24" align="center"><b title="'.$lang['353'].'">'.$lang[354].'</b></td>
<td width="8%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['183'].'</b></td>
<td width="8%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['184'].'</b></td>
<td width="8%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['185'].'</b></td>
</tr>';




$link="index.php?page=user&sort=".$_GET['sort']."&q=".$_GET['q']."&query=".$_GET['query']."&strona=";



$zapytanie = 'SELECT * FROM '.$pre.'user '.$query.' ORDER by '.$q.' '.$sort.''; 

if(!$strona){
$nr=$_GET["strona"];
if($nr==0)
{
$nr=1;
}

$strona=$nr;
}


$ile="50";

$start=($strona-1)*$ile;     

$wykonaj = db_query($zapytanie) or Die("Nie działa zapytanie". $zapytanie);
$ile_rek = db_num_rows($wykonaj);

$podstron = ceil($ile_rek/$ile);

$zapytanie.= " LIMIT $start,$ile";    

$final = db_query($zapytanie) or Die ("Nie działa zapytanie końcowe");
$i=1;



while($row=db_fetch($final))
{

echo'<tr>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['user_id'].'</td>
<td width="30%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">';if($row['user_t']=="3"){echo'<span style="color:green;" title="'.$lang['186'].'"><b>'.$row['user_login'].'</b></span>';}else if($row['user_akt']=="0"){echo'<span style="color:red;" title="'.$lang['187'].'"><b>'.$row['user_login'].'</b></span>';}else{echo''.$row['user_login'].'';}echo'</td>
<td width="30%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['user_email'].'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">';if($row['user_akt']!="1"){echo'<a href="index.php?page=user&strona='.$_GET['strona'].'&sort='.$_GET['sort'].'&q='.$_GET['q'].'&query='.$_GET['query'].'&v=akt&id='.$row['user_id'].'"><img src="style/images/ok16r.png" title="'.$lang['188'].'"></a>';}else{echo'<a href="index.php?page=user&strona='.$_GET['strona'].'&sort='.$_GET['sort'].'&q='.$_GET['q'].'&query='.$_GET['query'].'&v=dakt&id='.$row['user_id'].'"><img src="style/images/ok16.png" title="'.$lang['189'].'"></a>';}echo'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">';if($row['user_vip']>="1"){echo'<img src="style/images/ok16.png" title="'.$lang['190'].'">';}else{}echo'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">';if($row['user_chat']=="1"){echo'<a href="index.php?page=user&strona='.$_GET['strona'].'&sort='.$_GET['sort'].'&q='.$_GET['q'].'&query='.$_GET['query'].'&v=chat_on&id='.$row['user_id'].'"><img src="style/images/ok16r.png" title="'.$lang['188'].'"></a>';}else{echo'<a href="index.php?page=user&strona='.$_GET['strona'].'&sort='.$_GET['sort'].'&q='.$_GET['q'].'&query='.$_GET['query'].'&v=chat_off&id='.$row['user_id'].'"><img src="style/images/ok16.png" title="'.$lang['189'].'"></a>';}echo'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">';if($row['user_t']=="3"){echo'<a href="index.php?page=user&strona='.$_GET['strona'].'&sort='.$_GET['sort'].'&q='.$_GET['q'].'&query='.$_GET['query'].'&v=readm&id='.$row['user_id'].'"><img src="style/images/reuser16.png" title="'.$lang['191'].'"></a>';}else{echo'<a href="index.php?page=user&strona='.$_GET['strona'].'&sort='.$_GET['sort'].'&q='.$_GET['q'].'&query='.$_GET['query'].'&v=addadm&id='.$row['user_id'].'"><img src="style/images/adduser16.png" title="'.$lang['192'].'"></a>';}echo'</td>
<td width="8%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=komentarze&action=profil&typ=g&id='.$row['user_id'].'"><img src="style/images/chat16.png" title="'.$lang[355].' ('.$row['user_ilek'].')"></a></td>
<td width="8%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="../profil/-/'.$row['user_id'].'"><img src="style/images/2user16.png" title="'.$lang['193'].'"></a></td>
<td width="8%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=user&action=view&id='.$row['user_id'].'"><img src="style/images/2user16.png" title="'.$lang['194'].'"></a></td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=user&v=delete&id='.$row['user_id'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="'.$lang['195'].'"></a></td>
</tr>';
$i++;
}
echo'</table>';

}
if($ile_rek>$ile)
{
include("include/podzial.php");
}


if($_GET['action']=="view")
{




if($_GET['v']=="delete")
{
$del="DELETE FROM ".$pre."user WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
$del="DELETE FROM ".$pre."szukam WHERE s_user='".db_real_escape_string($_GET['id'])."'";
db_query($del);
$del="DELETE FROM ".$pre."ankieta WHERE a_user='".db_real_escape_string($_GET['id'])."'";
db_query($del);

$Query='SELECT * FROM '.$pre.'friend WHERE fo_od="'.db_real_escape_string($_GET['id']).'" or fo_do="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $del="DELETE FROM ".$pre."friend WHERE fo_id='".$row['fo_id']."'";
   db_query($del);
}

$Query='SELECT * FROM '.$pre.'foto WHERE fo_user="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
@unlink("../upload/zdjecia/".$row['fo_fm']);
@unlink("../upload/zdjecia/".$row['fo_fd']);
}


echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['196'].'</b></center></div></div><br>';

}
if($_GET['v']=="addadm")
{
$del="UPDATE ".$pre."user SET user_t='3' WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['197'].'</b></center></div></div><br>';
}
if($_GET['v']=="akt")
{
$del="UPDATE ".$pre."user SET user_akt='1' WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['198'].'</b></center></div></div><br>';
}
if($_GET['v']=="dakt")
{
$del="UPDATE ".$pre."user SET user_akt='0' WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['199'].'</b></center></div></div><br>';
}
if($_GET['v']=="readm")
{
$del="UPDATE ".$pre."user SET user_t='1' WHERE user_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['200'].'</b></center></div></div><br>';
}


if($_GET['e']==1){echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['201'].'</b></center></div></div><br>';}
if($_GET['nh']==1){echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['202'].'</b></center></div></div><br>';}
if($_GET['nh']==2){echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['203'].'</b></center></div></div><br>';}

$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_GET['id']).'" '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{

echo'
<table>
<tr>
<td  align="center">';if($row['user_akt']!="1"){echo'<a href="index.php?page=user&action=view&id='.$row['user_id'].'&strona='.$_GET['strona'].'&sort='.$_GET['sort'].'&q='.$_GET['q'].'&query='.$_GET['query'].'&v=akt&id='.$row['user_id'].'"><img src="style/images/ok16r.png" title="'.$lang['204'].'"></a>';}else{echo'<a href="index.php?page=user&action=view&id='.$row['user_id'].'&strona='.$_GET['strona'].'&sort='.$_GET['sort'].'&q='.$_GET['q'].'&query='.$_GET['query'].'&v=dakt&id='.$row['user_id'].'"><img src="style/images/ok16.png" title="'.$lang['205'].'"></a>';}echo'</td>

<td  align="center">';if($row['user_t']=="3"){echo'<a href="index.php?page=user&&action=view&id='.$row['user_id'].'strona='.$_GET['strona'].'&sort='.$_GET['sort'].'&q='.$_GET['q'].'&query='.$_GET['query'].'&v=readm&id='.$row['user_id'].'"><img src="style/images/reuser16.png" title="'.$lang['206'].'"></a>';}else{echo'<a href="index.php?page=user&action=view&id='.$row['user_id'].'&strona='.$_GET['strona'].'&sort='.$_GET['sort'].'&q='.$_GET['q'].'&query='.$_GET['query'].'&v=addadm&id='.$row['user_id'].'"><img src="style/images/adduser16.png" title="'.$lang['207'].'"></a>';}echo'</td>

<td align="center"><a href="index.php?page=user&v=delete&id='.$row['user_id'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="'.$lang['208'].'"></a></td>
</tr></table><br>';


echo'
<form action="up_user.php" method="POST">
<input type="hidden" name="uid" value="'.$row['user_id'].'">
<table>
<tr>
<td><b>'.$lang['209'].'</b></td>
<td>';if($row['user_t']=="3"){echo'<span style="color:green;" title="'.$lang['215'].'"><b>'.$row['user_login'].'</b></span>';}else if($row['user_akt']=="0"){echo'<span style="color:red;" title="'.$lang['216'].'"><b>'.$row['user_login'].'</b></span>';}else{echo''.$row['user_login'].'';}echo'</td>
</tr>
<tr>
<td><b>'.$lang['210'].'</b></td>
<td>'.$row['user_email'].'</td>
</tr>
<tr>
<td><b>'.$lang['211'].'</b></td>
<td><input type="text" name="punkty" value="'.$row['user_money'].'"></td>
</tr>
<tr>
<td><b>'.$lang['212'].'</b></td>
<td><input type="text" name="vip" value="'.date("Y-m-d",$row['user_vip']).'"><br>'.$lang['213'].'</td>
</tr>
<tr>
<td valign="top"><b>'.$lang['390'].'</b></td>
<td><textarea  style="width:500px;height:150px;" name="omnie" >'.$row['user_omnie'].'</textarea></td>
</tr>
</table>
<input type="submit" value="'.$lang['214'].'">
</form>
<br><br>
<form action="up_user_haslo.php" method="POST">
<input type="hidden" name="uid" value="'.$row['user_id'].'">
<table>
<tr>
<td><b>'.$lang['217'].'</b></td>
<td><input type="password" name="noh"></td>
</tr>
</table>
<input type="submit" value="'.$lang['218'].'">
</form>
<br>
';

$idk=$row['user_id'];
}

if($idk=="")
{
echo'<center><b>'.$lang['219'].'</b></center>';
}

}

if($_GET['action']=="send")
{

if($send_u_e=="1")
{
	echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>Podaj tytuł i opis.</b></center></div></div><br>';
}

echo'

<form action="" method="POST">

<table>
<tr>
<td>Do kogo:</td>
<td><select name="do">
<option value=""';if($send_u_do==""){echo' selected="selected"';}echo'>Do wszystkich</option>
<option value="1"';if($send_u_do=="1"){echo' selected="selected"';}echo'>Do aktywnych</option>
<option value="2"';if($send_u_do=="2"){echo' selected="selected"';}echo'>Do nie aktywnych</option>
</select>
</td>
</tr>
<tr>
<td>Typ:</td>
<td><select name="typ">

<option value="1"';if($send_u_typ=="1"){echo' selected="selected"';}echo'>E-mail</option>
<option value="2"';if($send_u_typ=="2"){echo' selected="selected"';}echo'>PW</option>
</select>
</td>
</tr>
<td>Tytuł:</td>
<td><input type="text" name="tytul" style="width:250px;" value="'.$send_u_tytul.'"></td>
</tr>
<tr>
<td valign="top">Treść</td>
<td><textarea name="tresc" style="width:600px;height:250px;" id="elm1">'.$send_u_tresc.'</textarea><br>
<small>
Poniższe znaczniki można użyć w tytule i treści. <br>

{login} - Zostanie zmienione na login użytkownika<br>
{data_r} - Zostanie zmienione na date rejestracji<br>
{data_o} - Zostanie zmienione na date ostatniej wizyty<br>
</small>

<br></td>
</tr>
</table>
<input type="submit" value="Wyślij" name="send_user">
</form>

';

}
?>