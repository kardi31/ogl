<?php 
session_start();
include("../db_connect.php");
include("../include/function.php");

if($_SESSION['user_id']>=1)
{

   $del="DELETE FROM ".$pre."czlonkowie WHERE c_id='".db_real_escape_string($_GET['id'])."'";
   db_query($del);

}

header("Location: ".$_SERVER['HTTP_REFERER']."");

?>