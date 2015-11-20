<?php 
include("subheader.php");

$Query='SELECT * FROM '.$pre.'grupa ORDER by g_nazwa ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $g_id[]=$row['g_id'];
   $g_nazwan[]=namen($row['g_nazwa']);
   $g_nazwa[]=$row['g_nazwa'];
   $g_typ[]=$row['g_typ'];
   $g_data[]=$row['g_data'];
   $g_user[]=$row['g_user'];
   $g_del[]=$row['g_del'];

}

$smarty->assign("g_id",$g_id);
$smarty->assign("g_typ",$g_typ);
$smarty->assign("g_nazwan",$g_nazwan);
$smarty->assign("g_nazwa",$g_nazwa);
$smarty->assign("g_data",$g_data);
$smarty->assign("g_user",$g_user);
$smarty->assign("g_del",$g_del);

$smarty->assign("go",$_GET['go']);

$smarty->assign("stan",$_GET['stan']);

$smarty->assign("title",$lang['590'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/grupy.tpl');

?>
