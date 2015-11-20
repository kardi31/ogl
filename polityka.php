<?php 
include("subheader.php");


$smarty->assign("title",$lang['600'].' - '.$ust['nazwa']);
$smarty->assign("polityka",$ust['popr']);


$smarty->display($ust['templates'].'/polityka.tpl');

?>
