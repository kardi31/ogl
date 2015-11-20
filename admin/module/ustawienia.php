<?php 
if($indexphp!="ok"){exit();}
include("../include/pay_set.php");
echo'
<center>
<table width="1000">
<td width="20%" class="td_hover"'; if($_GET['action']=="podstawowe" or $_GET['action']==""){echo' bgcolor="#ffb217"';} echo' style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=podstawowe"><b>'.$lang['39'].'</b></a> </td>
<td width="20%" class="td_hover"'; if($_GET['action']=="vip"){echo' bgcolor="#ffb217"';} echo' style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=vip"><b>'.$lang['357'].'</b></a></td>
<td width="20%" class="td_hover"'; if($_GET['action']=="rejestracja"){echo' bgcolor="#ffb217"';} echo' style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=rejestracja"><b>'.$lang['41'].'</b></a></td>
<td width="20%" class="td_hover"'; if($_GET['action']=="news"){echo' bgcolor="#ffb217"';} echo' style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=news"><b>'.$lang['42'].'</b></a> </td>
<td width="20%" class="td_hover"'; if($_GET['action']=="kontakt"){echo' bgcolor="#ffb217"';} echo' style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=kontakt"><b>'.$lang['43'].'</b></a> </td>
</tr><tr>
<td width="20%" class="td_hover"'; if($_GET['action']=="reklama"){echo' bgcolor="#ffb217"';} echo' style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=reklama"><b>'.$lang['40'].'</b></a></td>
<td width="20%" class="td_hover"'; if($_GET['action']=="regulamin"){echo' bgcolor="#ffb217"';} echo' style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=regulamin"><b>'.$lang['44'].'</b></a> </td>
<td width="20%" class="td_hover"'; if($_GET['action']=="popr"){echo' bgcolor="#ffb217"';} echo' style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=popr"><b>'.$lang['358'].'</b></a></td>
<td width="20%" class="td_hover"'; if($_GET['action']=="woj"){echo' bgcolor="#ffb217"';} echo' style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=woj"><b>'.$lang['45'].'</b></a></td>
<td width="20%" class="td_hover"'; if($_GET['action']=="dane"){echo' bgcolor="#ffb217"';} echo' style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=dane"><b>Dane</b></a></td>

</tr>
</table>
</center>
';

if($_GET['action']=="dane" )
{


echo'
<center><br>
<table width="550">
<tr>
<td width="20%" class="td_hover"'; if($_GET['typ']=="sz"){echo' bgcolor="#ffb217"';} echo'style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=dane&typ=sz" >'.$lang['359'].'</td>
<td width="20%" class="td_hover"'; if($_GET['typ']=="je"){echo' bgcolor="#ffb217"';} echo'style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=dane&typ=je">'.$lang['360'].'</td>
<td width="20%" class="td_hover"'; if($_GET['typ']=="d"){echo' bgcolor="#ffb217"';} echo'style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=dane&typ=d">'.$lang['393'].'</td>
<td width="20%" class="td_hover"'; if($_GET['typ']=="s"){echo' bgcolor="#ffb217"';} echo'style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=dane&typ=s">'.$lang['394'].'</td>
<td width="20%" class="td_hover"'; if($_GET['typ']=="w"){echo' bgcolor="#ffb217"';} echo'style="font-weight:bold;font-size:14px;border:1px solid silver;padding:5px 5px 5px 5px;text-align:center;"><a href="index.php?page=ustawienia&action=dane&typ=w">'.$lang['395'].'</td>
</tr>
</table></center>
';

if($_GET['typ']<>"")
{
echo'
<br>
<a name="glowne"></a>

<form action="dodaj_dane.php" method="POST">
<input type="hidden" value="'.$_GET['typ'].'" name="typ">
<table>
<tr>
<td>'.$lang['397'].'</td><td><input type="text" name="nazwa"></td>
</tr>
<tr>
<td>'.$lang['396'].'</td><td><input type="text" name="eng"></td>
</tr>
</table>

<input type="submit" name="ddd" value="'.$lang['48'].'"></form>

';
if($_GET['v']=="dodane")
{

echo'<div id="ukryj" ><br><br><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['49'].'</b></center></div></div>';
}
if($_GET['v']=="delete")
{
$del="DELETE FROM ".$pre."dane WHERE d_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><br><br><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['50'].'</b></center></div></div>';
}


echo'<br><br>
<table width="40%" cellspacing="0" cellpadding="0" style="border: 1px solid #cccccc;">
<tr>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b></b></td>
<td width="90%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['51'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['52'].'</b></td>
</tr>';

$i=1;
$Query='SELECT * FROM '.$pre.'dane WHERE d_typ="'.db_real_escape_string($_GET['typ']).'"  ORDER by d_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'<tr>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$i.'</td>
<td width="90%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['d_nazwa'].'';if($row['d_eng']<>""){echo' - '.$row['d_eng'].'';}echo'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=ustawienia&action=dane&typ='.$_GET['typ'].'&v=delete&id='.$row['d_id'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="'.$lang['53'].'"></a></td>
</tr>';
$i++;
}
echo'</table>';
}
}



if($_GET['action']=="vip")
{
echo'
<br>
<form action="dodaj_dni.php" method="POST">
<table>
<tr>
<td><b>'.$lang['361'].':</b></td> 
<td><input type="text" name="pkt" value=""> <img src="style/images/faq16.png" title="'.$lang['362'].'"></td>
</tr>
<tr>
<td><b>'.$lang['363'].':</b></td> 
<td><input type="text" name="dni"></td>
</tr>
<tr>
<td><b>'.$lang['364'].':</b></td> 
<td><input type="text" name="cena"></td>
</tr>
<tr>
<td><b>'.$lang['365'].':</b></td> 
<td><input type="text" name="cpkt"> <img src="style/images/faq16.png" title="'.$lang['366'].'"></td>
</tr>
<tr>
<td><b>'.$lang['367'].':</b></td> 
<td><input type="text" name="cenasms"> <img src="style/images/faq16.png" title="'.$lang['368'].'"></td>
</tr>
<tr>
<td><b>'.$pay_set['lang_kod'].':</b></td> 
<td><input type="text" name="kod"> <img src="style/images/faq16.png" title="'.$lang['370'].'"></td>
</tr>
<tr>
<td><b>'.$lang['371'].':</b></td> 
<td><input type="text" name="numer"> </td>
</tr>
<tr>
<td><b>'.$lang['372'].':</b></td> 
<td><input type="text" name="tresc"> <img src="style/images/faq16.png" title="'.$lang['373'].'"></td>
</tr>
</table>
<input type="submit" name="ddd" value="'.$lang['384'].'"></form>


';
if($_GET['v']=="dodane")
{

echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['382'].'</b></center></div></div><br>';
}
if($_GET['v']=="delete")
{
$del="DELETE FROM ".$pre."dni WHERE dni_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['383'].'</b></center></div></div><br>';
}

echo'<br><br>
<table width="90%" cellspacing="0" cellpadding="0" style="border: 1px solid #cccccc;">
<tr>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b></b></td>
<td width="10%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['373'].'</b></td>
<td width="10%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['374'].'</b></td>
<td width="10%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['375'].'</b></td>
<td width="10%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['376'].'</b></td>
<td width="15%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['377'].'</b></td>
<td width="10%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['378'].'</b></td>
<td width="15%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['379'].'</b></td>
<td width="15%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['380'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['381'].'</b></td>
</tr>';

$i=1;
$Query='SELECT * FROM '.$pre.'dni  ORDER by dni_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'<tr>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$i.'</td>
<td width="10%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['dni_pkt'].'</td>
<td width="10%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['dni_dni'].'</td>
<td width="10%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['dni_cena'].'</td>
<td width="10%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['dni_cpkt'].'</td>
<td width="15%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['dni_cenasms'].'</td>
<td width="10%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['dni_numer'].'</td>
<td width="15%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['dni_kod'].'</td>
<td width="15%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['dni_tresc'].'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=ustawienia&action=vip&v=delete&id='.$row['dni_id'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="Usuń"></a></td>
</tr>';
$i++;
}
echo'</table>';
}


if($_GET['action']=="woj" )
{


echo'
<br>
<a name="glowne"></a>
<br>';



echo'
<form action="dodaj_woj.php" method="POST">
'.$lang['47'].' <input type="text" name="nazwa"><input type="submit" name="ddd" value="'.$lang['48'].'"></form>


';
if($_GET['v']=="dodane")
{

echo'<div id="ukryj" ><br><br><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['49'].'</b></center></div></div>';
}
if($_GET['v']=="delete")
{
$del="DELETE FROM ".$pre."woj WHERE w_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><br><br><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['50'].'</b></center></div></div>';
}


echo'<br><br>
<table width="40%" cellspacing="0" cellpadding="0" style="border: 1px solid #cccccc;">
<tr>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b></b></td>
<td width="90%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['51'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['52'].'</b></td>
</tr>';

$i=1;
$Query='SELECT * FROM '.$pre.'woj  ORDER by w_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'<tr>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$i.'</td>
<td width="90%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['w_nazwa'].'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=ustawienia&action=woj&v=delete&id='.$row['w_id'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="'.$lang['53'].'"></a></td>
</tr>';
$i++;
}
echo'</table>';
}

if($_GET['action']=="reklama" ){include("ustawienia_reklama.php");}

if($_GET['action']=="podstawowe" or $_GET['action']=="")
{
echo'<br><form action="ust_up_p.php" method="POST">

<center>

</center>
<a name="glowne"></a>
<br>
';
if($_GET['e']==1)
{
echo'<div id="ukryj" style="color:green"><b>'.$lang['55'].'</b></div>';
}
echo'
<table>
<tr>
<td>'.$lang['56'].'</td><td><input type="text" name="nazwa" value="'.$ust['nazwa'].'" style="width:200px;"></td>
</tr>
<tr>
<td valign="top">'.$lang['57'].'</td><td><input type="text" name="adres" value="'.$ust['adres'].'" style="width:200px;"> <img src="style/images/faq16.png" title="'.$lang['58'].' /"></td>
</tr>
<tr>
<td>Słowa kluczowe:</td><td><input type="text" name="meta_key" value="'.$ust['meta_key'].'" style="width:200px;"></td>
</tr>
<tr>
<td>Opis strony:</td><td><textarea name="meta_desc" style="width:300px;height:50px;">'.$ust['meta_desc'].'</textarea></td>
</tr>
<tr>
<td valign="top">Komunikat cookie:</td><td valign="top"><input type="radio" name="cookie_on" value="1"'; if($ust['cookie_on']==1){echo' checked';} echo'>Tak <input type="radio" name="cookie_on" value="0"'; if($ust['cookie_on']==0){echo' checked';} echo'>Nie</td>
</tr>
<tr>
<td>'.$lang['59'].'</td>
<td><select name="templates">';



$d = dir("../templates/");
while (false !== ($entry = $d->read())) {
   if(is_dir($entry))
{
}
else
{

      echo"<option"; if($entry==$ust['templates']){echo' selected="selected"';} echo" value='".$entry."'>$entry</option>";
}
}

echo'</select>
</td>
</tr>
<!---
<tr>
<td valign="top">'.$lang['60'].'</td><td valign="top"><input type="radio" name="cache" value="1"'; if($ust['cache']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="cache" value="0"'; if($ust['cache']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
--->
<tr>
<td valign="top">'.$lang['61'].'</td><td valign="top"><input type="radio" name="gift" value="1"'; if($ust['gift']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="gift" value="0"'; if($ust['gift']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['62'].'</td><td valign="top"><input type="radio" name="pwvip" value="1"'; if($ust['pwvip']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="pwvip" value="0"'; if($ust['pwvip']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['63'].'</td><td valign="top"><input type="radio" name="pvip" value="1"'; if($ust['pvip']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="pvip" value="0"'; if($ust['pvip']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['64'].'</td><td valign="top"><input type="radio" name="kvip" value="1"'; if($ust['kvip']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="kvip" value="0"'; if($ust['kvip']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['65'].'</td><td valign="top"><input type="radio" name="ovip" value="1"'; if($ust['ovip']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="ovip" value="0"'; if($ust['ovip']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['346'].'</td><td valign="top"><input type="radio" name="lang_on" value="1"'; if($ust['lang_on']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="lang_on" value="0"'; if($ust['lang_on']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['385'].'</td><td valign="top"><input type="radio" name="kos" value="1"'; if($ust['kos']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="kos" value="0"'; if($ust['kos']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['386'].'</td><td valign="top">
<select name="wiek">';
for($i=1;$i<=$ust['wiek_max'];$i++)
{
	echo'<option value="'.$i.'"'; if($ust['wiek']==$i){echo' selected="selected"';} echo'>'.$i.'</option>';
}
echo'<select>
</td>
</tr>

<tr>
<td valign="top">'.$lang['345'].'</td><td valign="top">
<select name="lang_d">';



$d = dir("../lang/");
while (false !== ($entry = $d->read())) {
   if(is_dir($entry))
{
}
else
{

      echo"<option"; if($entry==$ust['lang_d']){echo' selected="selected"';} echo" value='".$entry."'>$entry</option>";
}
}

echo'</select>
</td>
</tr>
<tr>
<td valign="top">'.$lang['66'].'</td>
<td valign="top">
<select name="uko">
<option value="0" '; if($ust['uko']==0){echo' selected="selected"';} echo'>'.$lang['67'].'</option>
<option value="1" '; if($ust['uko']==1){echo' selected="selected"';} echo'>'.$lang['68'].'</option>
<option value="2" '; if($ust['uko']==2){echo' selected="selected"';} echo'>'.$lang['69'].'</option>
</select>
</td>
</tr>
<tr>
<td valign="top">'.$lang['70'].'</td>
<td valign="top">
<select name="ukv">
<option value="0" '; if($ust['ukv']==0){echo' selected="selected"';} echo'>'.$lang['67'].'</option>
<option value="1" '; if($ust['ukv']==1){echo' selected="selected"';} echo'>'.$lang['68'].'</option>
<option value="2" '; if($ust['ukv']==2){echo' selected="selected"';} echo'>'.$lang['69'].'</option>
</select>
</td>
</tr>
<tr>
<td valign="top">'.$lang['391'].'</td>
<td valign="top"><input type="text" name="max_file_size" value="'.$ust['max_file_size'].'" style="width:50px;"> <img src="style/images/faq16.png" title="'.$lang['392'].'"></td>
</tr>
<tr>
<td valign="top">'.$lang['71'].'</td><td><input type="text" name="give" value="'.$ust['give'].'" style="width:100px;"> <img src="style/images/faq16.png" title="'.$lang['72'].'"></td>
</tr>
<tr>
<td valign="top">'.$lang['73'].'</td><td><input type="text" name="cenaf" value="'.$ust['cenaf'].'" style="width:100px;"> <img src="style/images/faq16.png" title="'.$lang['74'].'"></td>
</tr>
<tr>
<td valign="top">Płatność przelew:</td>
<td valign="top">
<select name="pay_typ" onchange="this.form.submit()">
'.$pay_set['pay_typ'].'
</select>
</td>
</tr>
<tr>
<td valign="top">Płatność sms:</td>
<td valign="top">
<select name="pay_typ_sms" onchange="this.form.submit()">
'.$pay_set['pay_typ_sms'].'
</select>
</td>
</tr>
<tr>
<td valign="top">'.$pay_set['lang_pin'].':</td><td><input type="text" name="dotpay_pin" value="'.$ust['dotpay_pin'].'" style="width:200px;"> <br>
</td>
</tr>
<tr>
<td valign="top">'.$pay_set['lang_dotpay'].':</td><td><input type="text" name="dotpay" value="'.$ust['dotpay'].'" style="width:200px;"> <br>
</td>
</tr>'.$pay_set['dod'].'';
if($pay_set['lang_dotpay_sms']<>"")
{
echo'
<tr>
<td valign="top">'.$pay_set['lang_dotpay_sms'].':</td><td><input type="text" name="dotpay_sms" value="'.$ust['dotpay_sms'].'" style="width:200px;"> <br>
</td>
</tr>';
}
echo'

<tr>
<td valign="top">'.$lang['90'].'</td><td valign="top"><input type="text" name="cenapkt" value="'.$ust['cenapkt'].'" style="width:100px;"> <img src="style/images/faq16.png" title="np: 0.1 za 1punkt czyli 1 grosz za 1 punkt"></td>
</tr>
<tr>
<td valign="top">Chat</td><td><input type="text" name="chatp" value="'.$ust['chatp'].'" style="width:200px;"><br>0 = Darmowy</td>
</tr>
<tr>
<td valign="top">Dodanie ogłoszenia</td><td><input type="text" name="oglp" value="'.$ust['oglp'].'" style="width:200px;"><br>0 = Darmowy</td>
</tr>
<tr>
<td valign="top">'.$lang['91'].'</td><td valign="top">
<select name="edytor">
<option value="0"'; if($ust['edytor']=="0"){echo' selected="selected"';}echo'>'.$lang['92'].'</option>
<option value="1"'; if($ust['edytor']=="1"){echo' selected="selected"';}echo'>'.$lang['93'].'</option>
<option value="2"'; if($ust['edytor']=="2"){echo' selected="selected"';}echo'>'.$lang['94'].'</option>
</select>
</td>
</tr>
<tr>
<td valign="top">'.$lang['95'].'<br>HTML - '.$lang['37'].'</td>
<td><textarea name="in_txt" id="elm1" style="width:600px;height:300px;">'.$ust['in_txt'].'</textarea></td>
</tr>
</table>
<input type="submit" value="'.$lang['96'].'"></form>';

}
if($_GET['action']=="rejestracja")
{

echo'<form action="ust_up_r.php" method="POST">


<center>

</center>
<a name="rejestracja"></a>
<br>
';
if($_GET['e']==2)
{
echo'<div id="ukryj" style="color:green"><b>Zapisano.</b></div>';
}
echo'
<table>
<tr>
<td valign="top">'.$lang['98'].'</td><td valign="top"><input type="radio" name="rejestracja" value="1"'; if($ust['rejestracja']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="rejestracja" value="0"'; if($ust['rejestracja']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['99'].'</td><td valign="top"><input type="radio" name="token_r" value="1"'; if($ust['token_r']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="token_r" value="0"'; if($ust['token_r']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['100'].'</td><td valign="top"><input type="radio" name="akt_r" value="1"'; if($ust['akt_r']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="akt_r" value="0"'; if($ust['akt_r']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr><td colspan="2"><b>Logowania Facebook</b></td></tr>
<tr>
<td valign="top">Aktywne:</td><td valign="top"><input type="radio" name="fb_on" value="1"'; if($ust['fb_on']==1){echo' checked';} echo'>Tak <input type="radio" name="fb_on" value="0"'; if($ust['fb_on']==0){echo' checked';} echo'>Nie</td>
</tr>
<tr>
<td>Facebook ID:</td><td><input type="text" name="fb_id" value="'.$ust['fb_id'].'" style="width:200px;"></td>
</tr>
<tr>
<td>App Secret:</td><td><input type="password" name="fb_se" value="" ';if($ust['fb_se']<>""){echo'placeholder="App Secret podany"';}echo' style="width:200px;"></td>
</tr>
<tr>
<td colspan="2" style="font-size:12px;padding:5px;">
Aby aktywować logowanie poprzez facebook, musisz utworzyć nową aplikacje facebook. <br>Można to zrobić pod tym adresem: <a href="https://developers.facebook.com/apps">https://developers.facebook.com/apps</a>
</td>
</tr>

</table>
<input type="submit" value="'.$lang['101'].'"></form>';
}
if($_GET['action']=="news")
{

echo'<form action="ust_up_n.php" method="POST">


<center>

</center>
<a name="news"></a>
<br>
';
if($_GET['e']==2)
{
echo'<div id="ukryj" style="color:green"><b>'.$lang['114'].'</b></div>';
}
echo'
<table>
<tr>
<td valign="top">'.$lang['103'].'</td>
<td valign="top">
<select name="nocena">
<option value="0" '; if($ust['nocena']==0){echo' selected="selected"';} echo'>'.$lang['104'].'</option>
<option value="1" '; if($ust['nocena']==1){echo' selected="selected"';} echo'>'.$lang['105'].'</option>
<option value="2" '; if($ust['nocena']==2){echo' selected="selected"';} echo'>'.$lang['106'].'</option>
</select>
</td>
</tr>
<tr>
<td valign="top">'.$lang['107'].'</td>
<td valign="top">
<select name="nkomentowa'.$lang['38'].'">
<option value="0" '; if($ust['nkomentowa'.$lang['38'].'']==0){echo' selected="selected"';} echo'>'.$lang['104'].'</option>
<option value="1" '; if($ust['nkomentowa'.$lang['38'].'']==1){echo' selected="selected"';} echo'>'.$lang['105'].'</option>
<option value="2" '; if($ust['nkomentowa'.$lang['38'].'']==2){echo' selected="selected"';} echo'>'.$lang['106'].'</option>
</select>
</tr>
<tr>
<td valign="top">'.$lang['108'].'</td><td valign="top"><input type="radio" name="nt" value="1"'; if($ust['token_news']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="nt" value="0"'; if($ust['token_news']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['109'].'</td><td><select name="ilen">
';
for($i=0;$i<=100;$i++)
{
echo'<option value="'.$i.'"'; if($ust['ilen']==$i){echo' selected="selected"';}echo'>'.$i.'</option>';
}
echo'
</select>
<small>'.$lang['110'].'
</td>
</tr>

</table>
<input type="submit" value="'.$lang['111'].'"></form>';
}


if($_GET['action']=="kontakt")
{
echo'<br><form action="ust_up_k.php" method="POST">

<center>

</center>
<a name="kontaktt"></a>
<br>
';
if($_GET['e']==5)
{
echo'<div id="ukryj" style="color:green"><b>'.$lang['119'].'</b></div>';
}
echo'
<table>
<tr>
<td>'.$lang['120'].'</td><td><input type="text" name="email" value="'.$ust['email'].'" style="width:200px;"></td>
</tr>
<tr>
<td valign="top">'.$lang['121'].'</td><td valign="top"><input type="radio" name="fk" value="1"'; if($ust['fk']==1){echo' checked';} echo'>'.$lang['37'].' <input type="radio" name="fk" value="0"'; if($ust['fk']==0){echo' checked';} echo'>'.$lang['38'].'</td>
</tr>
<tr>
<td valign="top">'.$lang['122'].'</td>
<td><textarea name="kontaktt" id="elm1" style="width:500px;height:150px;">'.$ust['kontaktt'].'</textarea></td>
</tr>
</table>
<input type="submit" value="'.$lang['123'].'"></form>';

}

if($_GET['action']=="popr")
{
echo'<br><form action="ust_up_popr.php" method="POST">

<center>

</center>
<a name="popr"></a>
<br>
';
if($_GET['e']==5)
{
echo'<div id="ukryj" style="color:green"><b>'.$lang['125'].'</b></div>';
}
echo'
<table>
<tr>
<td valign="top">'.$lang['389'].':</td>
<td><textarea name="popr" id="elm1" style="width:700px;height:450px;">'.$ust['popr'].'</textarea></td>
</tr>
</table>
<input type="submit" value="'.$lang['127'].'"></form>';

}
if($_GET['action']=="regulamin")
{
echo'<br><form action="ust_up_reg.php" method="POST">

<center>

</center>
<a name="regulamin"></a>
<br>
';
if($_GET['e']==5)
{
echo'<div id="ukryj" style="color:green"><b>'.$lang['125'].'</b></div>';
}
echo'
<table>
<tr>
<td valign="top">'.$lang['126'].'</td>
<td><textarea name="regulamin" id="elm1" style="width:700px;height:450px;">'.$ust['regulamin'].'</textarea></td>
</tr>
</table>
<input type="submit" value="'.$lang['127'].'"></form>';

}
?>
