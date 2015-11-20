<?php 
session_start();
include("../db_connect.php");
include("../include/function.php");

if($_SESSION['user_id']>=1)
{

if($_COOKIE['lang']<>"" and isset($_COOKIE['lang']) and strlen($_COOKIE['lang'])<=3)
{
	$u_usr['lang']=substr($_COOKIE['lang'],0,3);
}
else
{
	$u_usr['lang']=$ust['lang_d'];
}


include("../lang/".$u_usr['lang']."/site.php");
}
if($_SESSION['user_id']>=1)
{

$Query='SELECT * FROM '.$pre.'czlonkowie WHERE c_id="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $g_user=$row['c_user'];
   $g_g=$row['c_g'];
}


$Query='SELECT * FROM '.$pre.'grupa WHERE g_id="'.$g_g.'" ORDER by g_nazwa ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
  $g_typ=$row['g_typ'];
  $g_id=$row['g_id'];
  $g_nazwa=$row['g_nazwa'];

}

   $del="UPDATE ".$pre."czlonkowie SET c_akt='1' WHERE c_id='".db_real_escape_string($_GET['id'])."'";
   db_query($del);

   $in="INSERT INTO ".$pre."pw(`pw_tytul`, `pw_tresc`, `pw_od`, `pw_do`, `pw_data`, `pw_typ`)VALUES('".$lang['598']." ".$g_nazwa."','".$lang['599']." ".$g_nazwa."', '0', '".$g_user."', NOW(), '1')";
   db_query($in);
   

}

header("Location: ".$_SERVER['HTTP_REFERER']."");

?>