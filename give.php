<?php 
session_start();
include("db_connect.php");
include("include/function.php");
include("include/ust.php");

if($_COOKIE['lang']<>"" and isset($_COOKIE['lang']) and strlen($_COOKIE['lang'])<=3)
{
	$u_usr['lang']=substr($_COOKIE['lang'],0,3);
}
else
{
	$u_usr['lang']=$ust['lang_d'];
}
include("lang/".$u_usr['lang']."/site.php");
if($_SESSION['user_id']>=1)
{

$Query = "SELECT * FROM ".$pre."user WHERE user_id='".$_SESSION['user_id']."'";
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

   $user_od=$row['user_id'];
   $user_money=$row['user_money'];

}

   $user_do=htmlspecialchars($_POST['do']);

$Query = "SELECT * FROM ".$pre."gift WHERE gi_id='".db_real_escape_string($_POST['id'])."'";
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

   $gift_id=$row['gi_id'];
   $gift_cena=$row['gi_cena'];
   $gift_money=$row['gi_money'];
  
}

if($user_money>=$gift_cena and $gift_id>=1)
{
   $up="UPDATE ".$pre."user SET user_money=user_money-".$gift_cena." WHERE user_id='".db_real_escape_string($user_od)."'";  
   db_query($up);

   if($gift_money>=1)
   {
       $up="UPDATE ".$pre."user SET user_money=user_money+".$gift_money." WHERE user_id='".db_real_escape_string($user_do)."'";  
       db_query($up);
   }
   
   

   $in='INSERT INTO `'.$pre.'give`(`ge_do`,`ge_od`,`ge_data`,`ge_gi`)VALUES("'.$user_do.'","'.$user_od.'",NOW(),"'.$gift_id.'")';
   db_query($in);

   $in="INSERT INTO ".$pre."pw(`pw_tytul`, `pw_tresc`, `pw_od`, `pw_do`, `pw_data`, `pw_typ`)VALUES('".$lang['521']."".get_login_user($user_od)." ".$lang['522']."','".$lang['521']." ".get_login_user($user_od)." ".$lang['522'].". Sprawdź  <a href=\"".$ust['adres']."profil/profil/".$user_do."/prezenty\">tutaj</a>.', '".$_SESSION['user_id']."', '".$user_do."', NOW(), '1')";
   db_query($in);


   header("Location: prezent/user-".$user_do."-1");
   exit();
}
else
{
   header("Location: prezent/user-".$user_do."-2");
   exit();
}

}
else
{
   header("Location: prezent/");
   exit();
}

?>