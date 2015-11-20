<?php 
session_start();
include("../db_connect.php");
include("../include/function.php");

if($_SESSION['user_id']!="")
{

$tresc=$_POST['opis'];
$tresc=htmlspecialchars($tresc);
$trescn=$_POST['nazwa'];
$trescn=htmlspecialchars($trescn);

if($tresc!="" and $trescn!="")
{
   $in="INSERT INTO ".$pre."imprezy(`i_user`, `i_d`, `i_m`,`i_y`,`i_h`,`i_mi`,`i_nazwa`,`i_opis`,`i_data_do`)VALUES('".$_SESSION['user_id']."','".$_POST['id']."','".$_POST['im']."','".$_POST['iy']."','".$_POST['ih']."','".$_POST['imi']."','".$trescn."','".$tresc."',NOW())";
   db_query($in);
   header("Location: ../user/imprezy/s-4");
   exit();
}


}

header("Location: ../user/imprezy/s-3");

?>