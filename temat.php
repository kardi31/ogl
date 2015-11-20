<?php 
include("subheader.php");


if($_POST['addkom'])
{

$kod=0;
if($ust['token_news']=="0")
{
  $kod=1;
}
else
{
  if($_POST['kod']==$_SESSION['token']){$kod=1;}else{$kod=0;}
}

if($_SESSION['user_nick']=="")
{ 
   $nick=$_POST['nick'];
}
else
{
  $nick=$_SESSION['user_nick'];
}

if($nick!="" and $_POST['tresc']!="" AND $kod==1)
{
  $in="INSERT INTO ".$pre."komentarze(`kom_nick`, `kom_tresc`, `kom_data`, `kom_typ`, `kom_idk`, `kom_idu`) VALUE ('".htmlspecialchars($nick)."', '".htmlspecialchars($_POST['tresc'])."', NOW(), 'gr', '".htmlspecialchars($_GET['id'])."', '".$_SESSION['user_id']."')";
  db_query($in);
  $idi=db_insert_id();
  $del=md5($idi."-".rand(0,200));
  $as="UPDATE ".$pre."komentarze SET kom_del='".$del."' WHERE kom_id='".$idi."'";
  db_query($as);
  $up="UPDATE ".$pre."temat SET t_dataz=NOW(),t_ile=t_ile+1 WHERE t_id='".$_GET['id']."'";
  db_query($up);
  header("Location: ".$_SERVER['HTTP_REFERER']."");
  exit();
}
else
{

  $tresc=htmlspecialchars($_POST['tresc']);

  if($nick)
  {
     $smarty->assign("e_n","1");
     $smarty->assign("e_t",$nick);
  }
  else
  {
     $smarty->assign("e_n","0");
     $smarty->assign("e_t",$nick);
  }
  if($_POST['tresc']=="")
  {
     $smarty->assign("t_n","1");
     $smarty->assign("t_t",$tresc);
  }
  else
  {
     $smarty->assign("t_n","0");
     $smarty->assign("t_t",$tresc);
  }
  if($kod==1)
  {
     $smarty->assign("k_n","0");
  }
  else
  {
     $smarty->assign("k_n","1");
  }
}

}

$Query='SELECT * FROM '.$pre.'temat WHERE t_id="'.db_real_escape_string($_GET['id']).'" ORDER by t_dataz DESC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $gt_id=$row['t_id'];
   $gt_nazwan=namen($row['t_nazwa']);
   $gt_nazwa=$row['t_nazwa'];
   $gt_data=$row['t_data'];
   $gt_user=$row['t_user'];
   $gt_ile=$row['t_ile'];
   $gt_g=$row['t_g'];
   $gt_dataz=$row['t_dataz'];

}


$Query='SELECT * FROM '.$pre.'grupa WHERE g_id="'.$gt_g.'" ORDER by g_nazwa ASC'; 
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

$Query='SELECT * FROM '.$pre.'czlonkowie WHERE c_g="'.$g_id.'" and c_user="'.$_SESSION['user_id'].'" and c_akt="1" '; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
  $smarty->assign("czlonek",$row['c_akt']);
}

$smarty->assign("g_id",$g_id);
$smarty->assign("g_typ",$g_typ);
$smarty->assign("g_nazwan",$g_nazwan);
$smarty->assign("g_nazwa",$g_nazwa);
$smarty->assign("g_data",$g_data);
$smarty->assign("g_user",$g_user);

$kom_ile=0;
$Query='SELECT * FROM '.$pre.'komentarze WHERE kom_idk="'.db_real_escape_string($_GET['id']).'" AND kom_typ="gr" ORDER by kom_id ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

  $kom_data[]=$row['kom_data'];
  $kom_nick[]=$row['kom_nick'];
  $kom_nickf[]=get_user_foto($row['kom_idu']);
  $kom_nickn[]=namen($row['kom_nick']);
  $kom_tresc[]=$row['kom_tresc'];
  $kom_idu[]=$row['kom_idu'];
  $kom_del[]=$row['kom_del'];

$kom_ile++;
}

$smarty->assign("kom_data",$kom_data);
$smarty->assign("kom_nick",$kom_nick);
$smarty->assign("kom_nickf",$kom_nickf);
$smarty->assign("kom_nickn",$kom_nickn);
$smarty->assign("kom_idu",$kom_idu);
$smarty->assign("kom_tresc",$kom_tresc);
$smarty->assign("kom_ile",$kom_ile);
$smarty->assign("kom_del",$kom_del);

$smarty->assign("gt_id",$gt_id);
$smarty->assign("gt_nazwan",$gt_nazwan);
$smarty->assign("gt_nazwa",$gt_nazwa);
$smarty->assign("gt_data",$gt_data);
$smarty->assign("gt_user",$gt_user);
$smarty->assign("gt_ile",$gt_ile);
$smarty->assign("gt_dataz",$gt_dataz);

$smarty->assign("go",$_GET['go']);

$smarty->assign("stan",$_GET['stan']);

$smarty->assign("title",$lang['592'].' '.$gt_nazwa.' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/temat.tpl');

?>
