<?php 
if($indexphp!="ok"){exit();}

if($_GET['action']=="")
{

echo'<center>';

if($_GET['e']==1)
{
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['321'].'</b></center></div></div><br>';
}
if($_GET['e']==2)
{
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['322'].'</b></center></div></div><br>';
}
if($_GET['v']=="delete")
{

$del="DELETE FROM ".$pre."menu WHERE menu_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);

   $Query='SELECT * FROM '.$pre.'menu WHERE menu_s="'.db_real_escape_string($_GET['s']).'" AND menu_nr>"'.db_real_escape_string($_GET['nr']).'" ORDER by menu_id DESC'; 
   $result = db_query($Query) or die(db_error());
   while ($row = db_fetch($result)) 
   {
      $up="UPDATE ".$pre."menu SET menu_nr=menu_nr-1 WHERE menu_id='".$row['menu_id']."'";
      db_query($up);
   }

echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['323'].'</b></center></div></div><br>';
}

echo'
<a href="index.php?page=menu&action=add" title="'.$lang['324'].'"><img src="style/images/add32.png" style="vertical-align: middle;"><b>'.$lang['325'].'</b></a><br>
<br>

<table width="80%">
<tr>
<td width="50%" style="border: 1px solid rgb(204, 204, 204);">
<center><b>'.$lang['326'].'</b></center>
</td>
<td width="50%" style="border: 1px solid rgb(204, 204, 204);">
<center><b>'.$lang['327'].'</b></center>
</td>
</tr>
<tr>
<td valign="top" align="left" style="border: 1px solid rgb(204, 204, 204);">

<table width="100%">';

$ileml=db_query("SELECT * FROM ".$pre."menu WHERE menu_s='1'");
$ilel=db_num_rows($ileml);

$nrl=1;
$Query='SELECT * FROM '.$pre.'menu WHERE menu_s=1  ORDER by menu_nr ASC'; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'
<tr>
<td width="5%"  align="left" ';if($nrl!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
'.$row['menu_nr'].'
</td>
<td width="70%"  align="left" ';if($nrl!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
';if($row['menu_wys']=="1"){echo'<b style="color:green;" title="'.$lang['328'].'">'.$row['menu_nazwa'].'</b>';}else{echo'<b style="color:orange;" title="'.$lang['329'].'">'.$row['menu_nazwa'].'</b>';}echo'
</td>
<td width="5%" align="left" ';if($nrl!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
<a href="index.php?page=menu&action=edit&id='.$row['menu_id'].'" title="'.$lang['330'].'"><img src="style/images/edit.gif"></a>
</td>
<td width="5%" align="left" ';if($nrl!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
<a href="index.php?page=menu&action=&v=delete&id='.$row['menu_id'].'&s='.$row['menu_s'].'&nr='.$row['menu_nr'].'" title="'.$lang['331'].'" onclick="return(potwierdz())"><img src="style/images/delete.png"></a>
</td>
<td width="5%"  align="left"  ';if($nrl!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
';if($nrl==1){echo'';}else{echo'<a href="menu_edit.php?id='.$row['menu_id'].'&typ=top&s=1"><img src="style/images/up16.png" title=""></a>';}echo'<br>
';if($ilel==$nrl){echo'<br>';}else{echo'<a href="menu_edit.php?id='.$row['menu_id'].'&typ=down&s=1"><img src="style/images/down16.png" title="">';}echo'</a>
</td>
<td width="5%" align="left"  ';if($nrl!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
<a href="menu_edit.php?id='.$row['menu_id'].'&typ=z&s=1"><img src="style/images/forward16.png" title=""></a>
</td>
</tr>';
$nrl++;
}
echo'</table>

</td>
<td valign="top" align="left" style="border: 1px solid rgb(204, 204, 204);">

<table width="100%">';

$ilemp=db_query("SELECT * FROM ".$pre."menu WHERE menu_s='2'");
$ilep=db_num_rows($ilemp);

$nrp=1;
$Query='SELECT * FROM '.$pre.'menu WHERE menu_s=2  ORDER by menu_nr ASC'; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'
<tr>
<td width="5%" align="left"  ';if($nrp!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
<a href="menu_edit.php?id='.$row['menu_id'].'&typ=z&s=2"><img src="style/images/back16.png" title=""></a>
</td>
<td width="5%"  align="left"  ';if($nrp!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
';if($nrp==1){echo'';}else{echo'<a href="menu_edit.php?id='.$row['menu_id'].'&typ=top&s=2"><img src="style/images/up16.png" title=""></a>';}echo'<br>
';if($ilep==$nrp){echo'<br>';}else{echo'<a href="menu_edit.php?id='.$row['menu_id'].'&typ=down&s=2"><img src="style/images/down16.png" title="">';}echo'</a>
</td>
<td width="5%" align="left" ';if($nrp!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
<a href="index.php?page=menu&action=edit&id='.$row['menu_id'].'" title="'.$lang['330'].'"><img src="style/images/edit.gif"></a>
</td>
<td width="5%" align="left" ';if($nrp!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
<a href="index.php?page=menu&action=&v=delete&id='.$row['menu_id'].'&s='.$row['menu_s'].'&nr='.$row['menu_nr'].'" title="'.$lang['331'].'" onclick="return(potwierdz())"><img src="style/images/delete.png"></a>
</td>
<td width="70%"  align="left" ';if($nrp!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
';if($row['menu_wys']=="1"){echo'<b style="color:green;" title="'.$lang['328'].'">'.$row['menu_nazwa'].'</b>';}else{echo'<b style="color:orange;" title="'.$lang['329'].'">'.$row['menu_nazwa'].'</b>';}echo'
</td>
<td width="5%"  align="left" ';if($nrp!=1){echo'style="border-top: 1px solid rgb(204, 204, 204);"';}echo'>
'.$row['menu_nr'].'
</td>
</tr>';
$nrp++;
}
echo'</table>


</td>
</tr>
</table>
<br>
<center>
<b style="color:green;">TXT</b> - <b>'.$lang['332'].'</b> | <b style="color:orange;">TXT</b> - <b>'.$lang['333'].'</b>
</center>

';
}


if($_GET['action']=="add")
{
echo'

<form action="add_menu.php" method="POST" name="frmn" onSubmit="return sprn();">

<table>
<tr>
<td><b>'.$lang['334'].'</b></td>
<td><input type="text" name="nazwa" style="width:250px;"></td>
</tr>
<tr>
<td><b>'.$lang['335'].'</b></td>
<td><input type="checkbox" name="wys" value="1" checked></td>
</tr>
<tr>
<td><b>'.$lang['336'].'</b></td>
<td><select name="s"><option value="1">'.$lang['338'].'</option><option value="2">'.$lang['339'].'</option></select></td>
</tr>
<tr>
<td><b>'.$lang['337'].'</b></td>
<td><select name="tf" id="tf" onchange="panel_f();"><option value="">'.$lang['340'].'</option>';



$d = dir("../panele/");
while (false !== ($entry = $d->read())) {
   if(is_dir($entry))
{
}
else
{

      echo"<option value='".$entry."'>$entry</option>";
}
}

echo'</select>
</td>
</tr>
<div id="paneltresc">
<tr>
<td valign="top"><b>'.$lang['341'].'</b></td>
<td><textarea name="tresc" style="width:300px;height:100px;" ></textarea></td>
</tr>
</div>
</table>
<input type="submit" value="'.$lang['342'].'" name="addcat">
</form>

';

}


if($_GET['action']=="edit")
{

$Query='SELECT * FROM '.$pre.'menu WHERE menu_id="'.db_real_escape_string($_GET['id']).'" limit 1'; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'
<center>
<form action="up_menu.php?id='.$row['menu_id'].'" method="POST" name="frmn" onSubmit="return sprn()">

<table>
<tr>
<td><b>'.$lang['334'].'</b></td>
<td><input type="text" name="nazwa" style="width:250px;" value="'.$row['menu_nazwa'].'"></td>
</tr>
<tr>
<td><b>'.$lang['335'].'</b></td>
<td><input type="checkbox" name="wys" value="1" ';if($row['menu_wys']){echo' checked';}echo'></td>
</tr>
<tr>
<td><b>'.$lang['337'].'</b></td>
<td><select name="tf" id="tf" onchange="panel_f();"><option value="">'.$lang['340'].'</option>';



$d = dir("../panele/");
while (false !== ($entry = $d->read())) {
   if(is_dir($entry))
{
}
else
{

      echo"<option"; if($row['menu_t']==$entry){echo' selected="selected"';}echo" value='".$entry."'>$entry</option>";
}
}

echo'</select>
</td>
</tr>
<div id="paneltresc">
<tr>
<td valign="top"><b>'.$lang['341'].'</b></td>
<td><textarea name="tresc" style="width:300px;height:100px;" >'.$row['menu_tresc'].'</textarea></td>
</tr>
</div>
</table>

<input type="submit" value="'.$lang['343'].'" name="addcat">
</form>
</center>
';
$idk=$row['menu_id'];
}

if($idk=="")
{
echo'<center><b>'.$lang['344'].'</b></center>';
}

}
?>