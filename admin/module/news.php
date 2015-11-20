<?php 
if($indexphp!="ok"){exit();}

if($_GET['action']=="")
{

echo'<center>';

if($_GET['e']==1)
{
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['137'].'</b></center></div></div><br>';
}
if($_GET['e']==2)
{
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['138'].'</b></center></div></div><br>';
}
if($_GET['e']=="t")
{
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['139'].'</b></center></div></div><br>';
}
if($_GET['v']=="delete")
{
$del="DELETE FROM ".$pre."news WHERE news_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['140'].'</b></center></div></div><br>';
}

echo'

<a href="index.php?page=news&action=add" title="'.$lang['142'].'"><img src="style/images/add32.png" style="vertical-align: middle;"><b>'.$lang['141'].'</b></a><br>
<br>
<table width="90%" cellspacing="0" cellpadding="0" style="border: 1px solid #cccccc;">
<tr>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['143'].'</b></td>
<td width="65%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['144'].'</b></td>
<td width="10%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['145'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['146'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b title="'.$lang['353'].'">'.$lang['354'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['147'].'</b></td>
</tr>';

$i=1;
$Query='SELECT * FROM '.$pre.'news  ORDER by news_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'<tr>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['news_id'].'</td>
<td width="65%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=news&action=view&id='.$row['news_id'].'" title="'.$lang['148'].'">'.$row['news_tytul'].'</a></td>
<td width="10%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">';if($row['news_wys']=="1"){echo'<img src="style/images/ok16.png" title="'.$lang['149'].'">';}else{echo'<b title="'.$lang['150'].'">---</b>';}echo'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=news&action=edit&id='.$row['news_id'].'"><img src="style/images/edit.gif" title="'.$lang['151'].'"></a></td>
<td width="8%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=komentarze&action=news&typ=n&id='.$row['news_id'].'"><img src="style/images/chat16.png" title="'.$lang['355'].' ('.$row['news_ilek'].')"></a></td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=news&v=delete&id='.$row['news_id'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="'.$lang['152'].'"></a></td>
</tr>';
$i++;
}
echo'</table>';

}

if($_GET['action']=="add")
{
echo'

<form action="add_news.php" method="POST" name="frmt" onSubmit="return sprt()">

<table>
<tr>
<td><b>'.$lang['153'].'</b></td>
<td><input type="text" name="tytul" style="width:250px;"></td>
</tr>
<tr>
<td><b>'.$lang['154'].'</b></td>
<td><input type="text" name="autor" disabled="disabled" value="'.$_SESSION['user_nick'].'"></td>
</tr>
<tr>
<td><b>'.$lang['155'].'</b></td>
<td><input type="checkbox" name="wys" value="1" checked></td>
</tr>
<tr>
<td valign="top"><b>'.$lang['156'].'</b></td>
<td><textarea name="tresc" style="width:500px;height:300px;" id="elm1"></textarea><br>
<a href="javascript:toggleEditor(\'elm1\');">'.$lang['157'].'</a>
</td>
</tr>
</table>
<input type="submit" value="'.$lang['158'].'" name="addnews">
</form>

';

}


if($_GET['action']=="edit")
{

$Query='SELECT * FROM '.$pre.'news WHERE news_id="'.db_real_escape_string($_GET['id']).'"  ORDER by news_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'

<form action="up_news.php?id='.$row['news_id'].'" method="POST" name="frmt" onSubmit="return sprt()">

<table>
<tr>
<td><b>'.$lang['153'].'</b></td>
<td><input type="text" name="tytul" style="width:250px;" value="'.$row['news_tytul'].'"></td>
</tr>
<tr>
<td><b>'.$lang['155'].'</b></td>
<td><input type="checkbox" name="wys" value="1" ';if($row['news_wys']){echo' checked';}echo'></td>
</tr>
<tr>
<td><b>'.$lang['154'].'</b></td>
<td><input type="text" name="autor" disabled="disabled" value="'.$row['news_user'].'"></td>
</tr>
<tr>
<td valign="top"><b>'.$lang['156'].'</b></td>
<td><textarea name="tresc" style="width:500px;height:300px;" id="elm1">'.$row['news_tresc'].'</textarea><br>
<a href="javascript:toggleEditor(\'elm1\');">'.$lang['157'].'</a>
</td>
</tr>
</table>
<input type="submit" value="'.$lang['158'].'" name="addnews">
</form>

';
$idk=$row['news_id'];
}

if($idk=="")
{
echo'<center><b>'.$lang['159'].'</b></center>';
}

}

if($_GET['action']=="view")
{

$Query='SELECT * FROM '.$pre.'news WHERE news_id="'.db_real_escape_string($_GET['id']).'"  ORDER by news_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'
<table width="60%">
<tr>
<td><b>'.$row['news_tytul'].'</b></td>
</tr>
<tr>
<td>'.$lang['160'].' '.$row['news_autor'].' '.$lang['161'].' '.$row['news_data'].'
</tr>
<tr>
<td>
'.$row['news_tresc'].'
</td>
</tr>
</table>
';
$idk=$row['news_id'];
}

if($idk=="")
{
echo'<center><b>'.$lang['159'].'</b></center>';
}

}
?>