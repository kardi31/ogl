<?php 
include("subheader.php");

if($_GET['del']>=1)
{
  $del="DELETE FROM ".$pre."imprezy WHERE i_id=".db_real_escape_string($_GET['del'])." and i_user=".$_SESSION['user_id']."";
  db_query($del);
  $smarty->assign("delc","1");
}

$Query='SELECT * FROM '.$pre.'imprezy WHERE i_user="'.db_real_escape_string($_SESSION['user_id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$i_id[]=$row['i_id'];
$i_d[]=$row['i_d'];
$i_m[]=$row['i_m'];
$i_y[]=$row['i_y'];
$i_h[]=$row['i_h'];
$i_mi[]=$row['i_mi'];
$i_nazwa[]=$row['i_nazwa'];
$i_opis[]=$row['i_opis'];

}

$smarty->assign("i_id",$i_id);
$smarty->assign("i_d",$i_d);
$smarty->assign("i_m",$i_m);
$smarty->assign("i_y",$i_y);
$smarty->assign("i_h",$i_h);
$smarty->assign("i_mi",$i_mi);
$smarty->assign("i_nazwa",$i_nazwa);
$smarty->assign("i_opis",$i_opis);

$smarty->assign("stan",$_GET['stan']);
$smarty->assign("title",$lang['464'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/panel-imprezy.tpl');

?>
