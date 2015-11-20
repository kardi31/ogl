<?php 
session_start();
include("../db_connect.php");
include("../include/ust.php");
include("../include/function.php");

if($_SESSION['user_id']>=1)
{

   $del="DELETE FROM ".$pre."czlonkowie WHERE c_g='".db_real_escape_string($_GET['id'])."' and c_user='".$_SESSION['user_id']."'";
   db_query($del);

}

header("Location: ".$ust['adres']."grupy/");

?>