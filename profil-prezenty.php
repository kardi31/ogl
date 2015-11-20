<?php 


$i_a=0;
$Query='SELECT * FROM '.$pre.'give WHERE ge_do="'.db_real_escape_string($_GET['id']).'" ORDER by ge_id DESC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
$Query1='SELECT * FROM '.$pre.'gift WHERE gi_id="'.db_real_escape_string($row['ge_gi']).'" '; 
$result1 = db_query($Query1) or die(db_error());
while ($row1 = db_fetch($result1)) 
{

$gi_id[]=$row1['gi_id'];
$gi_nazwa[]=$row1['gi_nazwa'];
$gi_img[]=$row1['gi_img'];

$gi_odid[]=$row1['gi_od'];

}
$gi_od[]=get_login_user($row['ge_od']);
$gi_data[]=$row['ge_data'];
$i_a++;
}
$smarty->assign("gi_id",$gi_id);
$smarty->assign("gi_nazwa",$gi_nazwa);
$smarty->assign("gi_img",$gi_img);
$smarty->assign("gi_od",$gi_od);
$smarty->assign("gi_odid",$gi_odid);
$smarty->assign("gi_data",$gi_data);
$smarty->assign("nrip","1");



$smarty->assign("i_a",$i_a);
$smarty->assign("stan",$_GET['stan']);

$Querys='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_GET['id']).'" and user_akt="1"'; 
$results = db_query($Querys) or die(db_error());
while ($rows = db_fetch($results)) 
{  
   $userlo=$rows['user_login'];
   $smarty->assign("user_lo",$rows['user_login']);
   $smarty->assign("user_plec",$rows['user_plec']);
   $smarty->assign("user_lon",namen($rows['user_login']));
   $smarty->assign("user_loid",$rows['user_id']);
   $userloid=$rows['user_id'];
}

$smarty->assign("title",$lang['468'].' '.$userlo.' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/profil-prezenty.tpl');

?>
