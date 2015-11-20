<?php 
session_start();
include("../db_connect.php");
include("../include/function.php");

setcookie("templates",$_POST['tem'], time()+86400, "/");   

header("Location: ".$_SERVER['HTTP_REFERER']."");
?>