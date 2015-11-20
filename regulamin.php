<?php 
include("subheader.php");


$smarty->assign("title",$lang['473'].' - '.$ust['nazwa']);
$smarty->assign("regulamin",$ust['regulamin']);


$smarty->display($ust['templates'].'/regulamin.tpl');

?>
