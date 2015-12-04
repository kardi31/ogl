<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js" ></script>
<script>
$(document).ready(function(){
   $("#date_to").inputmask("y-m-d",{ "placeholder": "*" });

});
</script>
<?php 
if($indexphp!="ok"){exit();}

$adPositions = array(
    'topright' => 'Prawy róg nad menu(200x200)',
    'top' => 'Duża górna reklama(728x90)',
    'bottom1' => 'Dolna 1(300x250)',
    'bottom2' => 'Dolna 2(300x250)',
    'bottom3' => 'Dolna 3(300x250)'
//    'bottom4' => 'Dolna 4(300x250)'
);

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
if($_GET['v']=="switch")
{
    $Query='update '.$pre.'ad set active = '.$_GET['value'].' WHERE id="'.db_real_escape_string($_GET['id']).'"  ORDER by id DESC '; 
    db_query($Query);
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>Reklama włączona/wyłączona</b></center></div></div><br>';
}
if($_GET['v']=="delete")
{
    
//    $Query='SELECT * FROM '.$pre.'ad WHERE id="'.db_real_escape_string($_GET['id']).'"  ORDER by id DESC '; 
//$result = db_query($Query) or die(db_error());
//while($row=db_fetch($result))
//{
//    unlink('../images/ad/'.$row['file']);
//}
$del="DELETE FROM ".$pre."ad WHERE id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>Reklama usunięta</b></center></div></div><br>';
}

echo'

<a href="index.php?page=reklama&action=add" title="'.$lang['284'].'"><img src="style/images/add32.png" style="vertical-align: middle;"><b>Dodaj reklame</b></a><br>
<br>
<table width="90%" cellspacing="0" cellpadding="0" style="border: 1px solid #cccccc;">
<tr>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['285'].'</b></td>
<td width="35%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['286'].'</b></td>
<td width="25%" background="style/images/belka.gif" height="24" align="center"><b>Pozycja</b></td>
<td width="15%" background="style/images/belka.gif" height="24" align="center"><b>Data do</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>Aktywny</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['288'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['289'].'</b></td>
</tr>';

$i=1;
$Query='SELECT * FROM '.$pre.'ad  ORDER by id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'<tr>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['id'].'</td>
<td width="35%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['name'].'</td>
<td width="25%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$adPositions[$row['position']].'</td>
<td width="15%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.substr($row['date_to'],0,10).'</td>
<td width="15%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=reklama&v=switch&id='.$row['id'].'&value='.($row['active']?0:1).'"><img src="style/images/checkbox-'.($row['active']?'checked':'unchecked').'.png" /></a></td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=reklama&action=edit&id='.$row['id'].'"><img src="style/images/edit.gif" title="'.$lang['290'].'"></a></td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=reklama&v=delete&id='.$row['id'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="'.$lang['291'].'"></a></td>
</tr>';
$i++;
}
echo'</table>';

}


if($_GET['action']=="add")
{
echo'
<h2>Dodaj reklame</h2>
<form action="/admin/upload-ad.php" method="POST" enctype="multipart/form-data">

<table>
<tr>
<td><b>Nazwa</b></td>
<td><input type="text" name="name" style="width:250px;"></td>
</tr>
<tr>
<tr>
<td><b>Adres url</b></td>
<td><input type="text" name="website" style="width:250px;"></td>
</tr>
<tr>
<td valign="top"><b>Data do</b></td>
<td><input id="date_to" type="text" name="date_to" style="width:250px;"><Br /><small>(zostaw puste jeżeli chcesz reklame na czas nieokreślony)</small><br /><br /></td>
</tr>
<tr>
<td valign="top"><b>Pozycja</b></td>
<td>
<select name="position">';

foreach($adPositions as $posValue => $position):
    echo '<option value="'.$posValue.'">'.$position.'</option>';
endforeach;

echo '</select>
<br /><br />
</td>
</tr>
<tr>
<td valign="top"><b>Reklama:</b></td>
<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000000" /><input name="plik1" type="file"/> <br><small>'.$lang['298'].'</small></td>
</tr>

</table>
<input type="submit" value="'.$lang['296'].'" name="addcatg">
</form>

';

}


if($_GET['action']=="edit")
{

$Query='SELECT * FROM '.$pre.'ad WHERE id="'.db_real_escape_string($_GET['id']).'"  ORDER by id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'
<h2>Edytuj reklame</h2>
<form action="/admin/edit-ad.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row['id'].'">
<table>
<tr>
<td><b>Nazwa</b></td>
<td><input type="text" name="name" value="'.$row['name'].'" style="width:250px;"></td>
</tr>
<tr>
<tr>
<td><b>Adres url</b></td>
<td><input type="text" name="website" value="'.$row['website'].'" style="width:250px;"></td>
</tr>
<tr>
<td><b>Data do</b></td>
<td><input id="date_to" type="text" name="date_to" value="'.substr($row['date_to'],0,10).'" style="width:250px;"></td>
</tr>
<tr>
<td><b>Pozycja</b></td>
<td>
<select name="position">';

foreach($adPositions as $posValue => $position):
    echo '<option '.(($row['position']==$posValue)?'selected':'').' value="'.$posValue.'">'.$position.'</option>';
endforeach;

echo '</select>

</td>
</tr>
<tr>
<td valign="top"><b>Reklama:</b></td>
<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000000" /><input name="plik1" type="file"/> <br><small>'.$lang['298'].'</small></td>
</tr>

<tr>
<td><b>Obecna reklama</b></td>
<td><img src="/images/ad/'.$row['file'].'" /></td>
</tr>
</table>
<input class="btn btn-info" type="submit" value="'.$lang['296'].'" name="addcatg">
</form>

';



}

if($idk=="")
{
echo'<center><b>'.$lang['300'].'</b></center>';
}

}


?>