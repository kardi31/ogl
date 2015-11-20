<?php 
session_start();
include("../db_connect.php");
include("../include/function.php");

if($_SESSION['user_id']!="")
{

$tresc=$_POST['tresc'];
$tresc=htmlspecialchars($tresc);
$user_kogo=htmlspecialchars($_POST['kogo']);


$in="INSERT INTO ".$pre."friend(`fo_od`, `fo_do`, `fo_tresc`, `fo_data`)VALUES('".$_SESSION['user_id']."', '".$user_kogo."', '".$tresc."', NOW())";
db_query($in);

}

header("Location: ../dodaj-znajomego/user-".$user_kogo."-ok");

?>