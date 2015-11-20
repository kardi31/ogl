<?php 
include("subheader.php");

$smarty->assign("title",$lang['480'].' - '.$ust['nazwa']);

if($_GET['z']=="ok")
{
   $smarty->assign("zgl","1");
}
else
{
   $smarty->assign("zgl","0");
}

$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $smarty->assign("user_zg",$row['user_login']);
   $smarty->assign("user_id_kogo",$row['user_id']);
}
 
$smarty->display($ust['templates'].'/zgloszenie.tpl');

?>
