<?php 

if($_GET['del']>=1)
{
  $del="DELETE FROM ".$pre."imprezy WHERE i_id=".db_real_escape_string($_GET['del'])." and i_user=".$_SESSION['user_id']."";
  db_query($del);
  $smarty->assign("delc","1");
}
$i_a=0;
$Query='SELECT * FROM '.$pre.'imprezy WHERE i_user="'.db_real_escape_string($_GET['id']).'" ORDER by i_y,i_m,i_d DESC'; 
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
$i_a++;
}


$smarty->assign("i_id",$i_id);
$smarty->assign("i_d",$i_d);
$smarty->assign("i_m",$i_m);
$smarty->assign("i_y",$i_y);
$smarty->assign("i_h",$i_h);
$smarty->assign("i_mi",$i_mi);
$smarty->assign("i_nazwa",$i_nazwa);
$smarty->assign("i_opis",$i_opis);
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

$smarty->assign("title",$lang['467'].' '.$userlo.' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/profil-imprezy.tpl');

?>
