<?php 
if($indexphp!="ok"){exit();}

if($_GET['action']=="")
{

echo'<center>';

if($_GET['e']==1)
{
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['279'].'</b></center></div></div><br>';
}
if($_GET['e']==2)
{
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['280'].'</b></center></div></div><br>';
}
if($_GET['e']=="t")
{
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['281'].'</b></center></div></div><br>';
}
if($_GET['v']=="delete")
{
$del="DELETE FROM ".$pre."gift WHERE gi_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
$del="DELETE FROM ".$pre."give WHERE ge_gi='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['282'].'</b></center></div></div><br>';
}

echo'

<a href="index.php?page=gift&action=add" title="'.$lang['284'].'"><img src="style/images/add32.png" style="vertical-align: middle;"><b>'.$lang['283'].'</b></a><br>
<br>
<table width="90%" cellspacing="0" cellpadding="0" style="border: 1px solid #cccccc;">
<tr>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['285'].'</b></td>
<td width="65%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['286'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['287'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['288'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['289'].'</b></td>
</tr>';

$i=1;
$Query='SELECT * FROM '.$pre.'gift  ORDER by gi_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'<tr>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['gi_id'].'</td>
<td width="65%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['gi_nazwa'].'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['gi_cena'].'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=gift&action=edit&id='.$row['gi_id'].'"><img src="style/images/edit.gif" title="'.$lang['290'].'"></a></td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=gift&v=delete&id='.$row['gi_id'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="'.$lang['291'].'"></a></td>
</tr>';
$i++;
}
echo'</table>';

}

if($_GET['action']=="add")
{
echo'

<form action="" method="POST" enctype="multipart/form-data">

<table>
<tr>
<td><b>'.$lang['292'].'</b></td>
<td><input type="text" name="nazwa" style="width:250px;"></td>
</tr>
<tr>
<td><b>'.$lang['293'].'</b></td>
<td><input type="text" name="cena" style="width:50px;"> <img src="style/images/faq16.png" title="Ile punktów zostanie pobranych z konta użytkownika za wysłanie tego  prezentu"></td>
</tr>
<tr>
<td><b>Punkty:</b></td>
<td><input type="text" name="money" value="0" style="width:50px;"> <img src="style/images/faq16.png" title="'.$lang['297'].'"></td>
</tr>
<tr>
<td valign="top"><b>Zdjęcie:</b></td>
<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000000" /><input name="plik1" type="file"/> <br><small>'.$lang['298'].'</small></td>
</tr>
</table>
<input type="submit" value="'.$lang['296'].'" name="addcatg">
</form>

';

}


if($_GET['action']=="edit")
{

$Query='SELECT * FROM '.$pre.'gift WHERE gi_id="'.db_real_escape_string($_GET['id']).'"  ORDER by gi_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'


<form action="" method="POST" enctype="multipart/form-data">

<table>
<tr>
<td><b>'.$lang['292'].'</b></td>
<td><input type="text" name="nazwa" style="width:250px;" value="'.$row['gi_nazwa'].'"></td>
</tr>';
if($row['gi_img']!="")
{
echo'
<tr>
<td></td>
<td><img src="../upload/gift/'.$row['gi_img'].'"><input type="checkbox" name="del" value="1">'.$lang['299'].'</td>
</tr>';
}
echo'
<tr>
<td><b>'.$lang['293'].'</b></td>
<td><input type="text" name="cena" value="'.$row['gi_cena'].'" style="width:250px;"></td>
</tr>
<tr>
<td><b>'.$lang['294'].'</b></td>
<td><input type="text" name="money"  value="'.$row['gi_money'].'"  style="width:250px;"><br><small>'.$lang['297'].'</small></td>
</tr>
<tr>
<td valign="top"><b>'.$lang['295'].'</b></td>
<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000000" /><input name="plik1" type="file"/> <br><small>'.$lang['298'].'</small></td>
</tr>
</table>
<input type="submit" value="'.$lang['296'].'" name="upcatg">
</form>


';
$idk=$row['gi_id'];
}

if($idk=="")
{
echo'<center><b>'.$lang['300'].'</b></center>';
}

}


?>