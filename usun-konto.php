<?php 
include("subheader.php");

$smarty->assign("stan",$_GET['stan']);
$smarty->assign("title",$lang['476'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/usun-konto.tpl');

?>
