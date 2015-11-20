<?php 
if($indexphp!="ok"){exit();}

if($_GET['action']=="")
{

echo'<center>';


if($_GET['v']=="delete")
{
$del="DELETE FROM ".$pre."zamowienia WHERE za_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['301'].'</b></center></div></div><br>';
}
$zop=0;
$znp=0;
$Query='SELECT * FROM '.$pre.'zamowienia ORDER by za_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{

if($row['za_op']=="1"){$zop=$zop+$row['za_cena'];}
if($row['za_op']=="0"){$znp=$znp+$row['za_cena'];}
}

echo'

<center>
<b>'.$lang['303'].' '.$zop.' '.$lang['302'].'<br>
'.$lang['304'].' '.$znp.' '.$lang['302'].'<br>
'.$lang['305'].' '.($zop+$znp).' '.$lang['302'].'<br>
<br>


<table width="90%" cellspacing="0" cellpadding="0" style="border: 1px solid #cccccc;">
<tr>
<td width="2%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['306'].'</b></td>
<td width="3%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['307'].'</b></td>
<td width="25%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['308'].'</b></td>
<td width="15%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['309'].'</b></td>
<td width="15%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['310'].'</b></td>
<td width="10%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['311'].'</b></td>
<td width="10%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['312'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['313'].'</b></td>
</tr>';

$i=1;
$nt=1;

$zop=0;
$znp=1;



$Query='SELECT * FROM '.$pre.'zamowienia ORDER by za_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'<tr>
<td width="2%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$nt++.'</td>
<td width="3%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['za_id'].'</td>
<td width="25%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">';

if($row['za_pakiet']=="pkt")
{
	echo''.$lang['314'].' '.$row['za_punkty'].'';
}

if($row['za_pakiet']=="pay")
{

	$Querys='SELECT * FROM '.$pre.'dni WHERE dni_id="'.db_real_escape_string($row['za_punkty']).'" ORDER by dni_dni ASC'; 
	$results = db_query($Querys) or die(db_error());
	while ($rows = db_fetch($results)) 
	{
   		$p_dni=$rows['dni_dni'];
	}
	echo'<b>'.$lang['348'].':</b> '.$lang['351'].': '.$p_dni.' '.$lang['347'].'';
}
if($row['za_pakiet']=="sms")
{
	$Querys='SELECT * FROM '.$pre.'dni WHERE dni_id="'.db_real_escape_string($row['za_punkty']).'" ORDER by dni_dni ASC'; 
	$results = db_query($Querys) or die(db_error());
	while ($rows = db_fetch($results)) 
	{
   		$p_dni=$rows['dni_dni'];
	}
	echo'<b>'.$lang['349'].':</b> '.$lang['351'].': '.$p_dni.' '.$lang['347'].'';
}
if($row['za_pakiet']=="cpkt")
{
	$Querys='SELECT * FROM '.$pre.'dni WHERE dni_id="'.db_real_escape_string($row['za_punkty']).'" ORDER by dni_dni ASC'; 
	$results = db_query($Querys) or die(db_error());
	while ($rows = db_fetch($results)) 
	{
   		$p_dni=$rows['dni_dni'];
		$p_cpkt=$rows['dni_cpkt'];
	}
	echo'<b>'.$lang['350'].':</b> '.$lang['351'].': '.$p_dni.' '.$lang['347'].'';
}
echo'</td>
<td width="15%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['za_data'].'</td>
<td width="15%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">';
if($row['za_pakiet']=="cpkt")
{
	echo''.$p_cpkt.' '.$lang['352'].'';
}
else
{
	echo''.$row['za_cena'].' '.$lang['302'].'';
}

echo'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.get_login_user($row['za_user']).'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">';if($row['za_op']=="1"){echo'<b style="color:green">'.$lang['318'].'</b>';}else{echo'<b style="color:red">'.$lang['319'].'</b>';}echo'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=zamowienia&v=delete&id='.$row['za_id'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="'.$lang['320'].'"></a></td>
</tr>';
$i++;
}
echo'</table>';

}


?>