<?php 
include("subheader.php");

$smarty->assign("title",$lang['455'].' - '.$ust['nazwa']);

if($_GET['z']=="ok")
{
   $smarty->assign("zgl","1");
}
else
{
   $smarty->assign("zgl","0");
}
   $smarty->assign("stan",htmlspecialchars($_GET['stan']));
$Query='SELECT * FROM '.$pre.'gift'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$gi_id[]=$row['gi_id'];
$gi_cena[]=$row['gi_cena'];
$gi_money[]=$row['gi_money'];
$gi_img[]=$row['gi_img'];
$gi_nazwa[]=$row['gi_nazwa'];
}

$smarty->assign("gi_id",$gi_id);
$smarty->assign("gi_cena",$gi_cena);
$smarty->assign("gi_nazwa",$gi_nazwa);
$smarty->assign("gi_img",$gi_img);
$smarty->assign("gi_money",$gi_money);

$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $smarty->assign("user_zg",$row['user_login']);
   $smarty->assign("user_id_kogo",$row['user_id']);
}
    $smarty->assign("nrip","1");
$smarty->display($ust['templates'].'/gift.tpl');

?>
