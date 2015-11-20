<?php 
session_start();

$_SESSION['logadm']="";
$_SESSION['user_nick']="";
$_SESSION['user_id']="";
$_SESSION['user_t']="";

unset($_SESSION['logadm']);
unset($_SESSION['user_nick']);
unset($_SESSION['user_id']);
unset($_SESSION['user_t']);
setcookie("autologin", "", time()-86400000);

if($_SERVER['HTTP_REFERER']!="")
{
   $adres=$_SERVER['HTTP_REFERER'];
}
else
{
  $adres="index.php";
}

header("Location: ".$adres."");
?>