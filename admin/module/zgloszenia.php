<?php 
if($indexphp!="ok"){exit();}


echo'<center>';


if($_GET['v']=="delete")
{
$del="DELETE FROM ".$pre."zgloszenia WHERE zg_id='".db_real_escape_string($_GET['id_del'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['271'].'</b></center></div></div><br>';
}

//----------------

$k=0;

$Query='SELECT * FROM '.$pre.'zgloszenia ORDER by zg_id DESC'; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'
<table>
<tr>
<td><a href="index.php?page=zgloszenia&id_del='.$row['zg_id'].'&v=delete">'.$lang['272'].'</a></td>
<td></td>
</tr>
<tr>
<td>'.$lang['273'].'</td>
<td><a href="user/'.namen(get_login_user($row['zg_kto'])).'/'.$row['zg_kto'].'">'.get_login_user($row['zg_kto']).'</a></td>
</tr>
<tr>
<td>'.$lang['274'].'</td>
<td><a href="user/'.namen(get_login_user($row['zg_kogo'])).'/'.$row['zg_kogo'].'">'.get_login_user($row['zg_kogo']).'</a> - <a href="index.php?page=user&v=delete&id='.$row['zg_kogo'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="'.$lang['277'].'"></a></td>
</tr>
<tr>
<td>'.$lang['275'].'</td>
<td>'.$row['zg_data'].'</td>
</tr>
<tr>
<td>'.$lang['276'].'</td>
<td>'.$row['zg_tresc'].'</td>
</tr>
</table>
<hr>
';
$k++;
}

if($k=="0"){echo'<center><b>'.$lang['278'].'</b></center>';}


?>