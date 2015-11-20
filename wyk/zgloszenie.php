<?php 
session_start();
include("../db_connect.php");
include("../include/function.php");

if($_SESSION['user_id']!="")
{

$tresc=$_POST['tresc'];
$tresc=htmlspecialchars($tresc);
$user_kogo=htmlspecialchars($_POST['kogo']);


$in="INSERT INTO ".$pre."zgloszenia(`zg_kto`, `zg_kogo`, `zg_tresc`, `zg_data`)VALUES('".$_SESSION['user_id']."', '".$user_kogo."', '".$tresc."', NOW())";
db_query($in);

}

header("Location: ../zgloszenie/user-".$user_kogo."-ok");

?>