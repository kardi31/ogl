<?php 
include("subheader.php");

$smarty->assign("stan",$_GET['stan']);
$smarty->assign("title",$lang['481'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/zmien-haslo.tpl');

?>
