<?php 
session_start();
include("../db_connect.php");
include("../include/function.php");
include("../ust.php");
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

if($_SESSION['user_id']>=1)
{

$Query='SELECT * FROM '.$pre.'grupa WHERE g_id="'.db_real_escape_string($_GET['id']).'" ORDER by g_nazwa ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
  $g_typ=$row['g_typ'];
  $g_id=$row['g_id'];
  $g_nazwa=$row['g_nazwa'];
  $g_user=$row['g_user'];
}

   $insert="INSERT INTO ".$pre."czlonkowie(`c_user`,`c_akt`,`c_g`)VALUES('".$_SESSION['user_id']."','".$g_typ."','".$g_id."')";
   db_query($insert);

   $idi=db_insert_id();
   if($g_typ=="0")
   {
      $in="INSERT INTO ".$pre."pw(`pw_tytul`, `pw_tresc`, `pw_od`, `pw_do`, `pw_data`, `pw_typ`)VALUES('".$lang['593']." ".$g_nazwa."','".$lang['594']." <a href=\"profil/".$_SESSION['user_nick']."/".$_SESSION['user_id']."/\">".$_SESSION['user_nick']."</a> ".$lang['595']." ".$g_nazwa.".<br><br>".$lang['596']."<br><br><a href=\"grupa/".$g_id."/".$g_nazwa."_user:view\">".$lang['587']."</a>', '0', '".$g_user."', NOW(), '1')";
      db_query($in);
   }
   if($g_typ=="1")
   {
      $in="INSERT INTO ".$pre."pw(`pw_tytul`, `pw_tresc`, `pw_od`, `pw_do`, `pw_data`, `pw_typ`)VALUES('".$lang['593']." ".$g_nazwa."','".$lang['594']." <a href=\"profil/".$_SESSION['user_nick']."/".$_SESSION['user_id']."/\">".$_SESSION['user_nick']."</a> ".$lang['595']." ".$g_nazwa.".<br><br><a href=\"grupa/".$g_id."/".$g_nazwa."_user:view\">".$lang['587']."</a>', '0', '".$g_user."', NOW(), '1')";
      db_query($in);
   }
}
}
header("Location: ../grupa/".$g_id."/".$g_nazwa."_add:dodano");

?>s