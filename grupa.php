<?php 
include("subheader.php");

$Query='SELECT * FROM '.$pre.'czlonkowie WHERE c_g="'.db_real_escape_string($_GET['id']).'" and c_user="'.$_SESSION['user_id'].'" and c_akt="1" '; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
  $smarty->assign("czlonek",$row['c_akt']);
}

$Query='SELECT * FROM '.$pre.'grupa WHERE g_id="'.db_real_escape_string($_GET['id']).'" ORDER by g_nazwa ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $g_id=$row['g_id'];
   $g_nazwan=namen($row['g_nazwa']);
   $g_nazwa=$row['g_nazwa'];
   $g_typ=$row['g_typ'];
   $g_data=$row['g_data'];
   $g_user=$row['g_user'];

}

$smarty->assign("g_id",$g_id);
$smarty->assign("g_typ",$g_typ);
$smarty->assign("g_nazwan",$g_nazwan);
$smarty->assign("g_nazwa",$g_nazwa);
$smarty->assign("g_data",$g_data);
$smarty->assign("g_user",$g_user);

$Query='SELECT * FROM '.$pre.'temat WHERE t_g='.$g_id.' ORDER by t_dataz DESC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $gt_id[]=$row['t_id'];
   $gt_nazwan[]=namen($row['t_nazwa']);
   $gt_nazwa[]=$row['t_nazwa'];
   $gt_data[]=$row['t_data'];
   $gt_user[]=$row['t_user'];
   $gt_ile[]=$row['t_ile'];
   $gt_dataz[]=$row['t_dataz'];
   $gt_del[]=$row['t_del'];

}

$smarty->assign("gt_id",$gt_id);
$smarty->assign("gt_nazwan",$gt_nazwan);
$smarty->assign("gt_nazwa",$gt_nazwa);
$smarty->assign("gt_data",$gt_data);
$smarty->assign("gt_user",$gt_user);
$smarty->assign("gt_ile",$gt_ile);
$smarty->assign("gt_dataz",$gt_dataz);
$smarty->assign("gt_del",$gt_del);

if($_GET['go']=="user")
{
  $Query='SELECT * FROM '.$pre.'czlonkowie WHERE c_g='.$g_id.' order by c_akt DESC'; 
  $result = db_query($Query) or die(db_error());
  while ($row1 = db_fetch($result)) 
  {
     $Query1='SELECT * FROM '.$pre.'user WHERE user_id='.$row1['c_user'].' Limit 1'; 
     $result1 = db_query($Query1) or die(db_error());
     while ($row = db_fetch($result1)) 
     {
        $u_login[]=$row['user_login'];
        $u_loginn[]=namen($row['user_login']);
        $u_id[]=$row['user_id'];
    
     }
        $u_akt[]=$row1['c_akt'];
        $u_cid[]=$row1['c_id'];

  }
}

$smarty->assign("u_id",$u_id);
$smarty->assign("u_cid",$u_cid);
$smarty->assign("u_login",$u_login);
$smarty->assign("u_loginn",$u_loginn);
$smarty->assign("u_akt",$u_akt);

$smarty->assign("go",$_GET['go']);

$smarty->assign("stan",$_GET['stan']);

$smarty->assign("title",$lang['591'].' '.$g_nazwa.' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/grupa.tpl');

?>
