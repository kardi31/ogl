<?php 
session_start();
include("../db_connect.php");
include("../include/ust.php");


if($_SESSION['user_id']>=1)
{


  $up="UPDATE ".$pre."foto SET fo_opis='".htmlspecialchars($_POST['opis'])."' WHERE fo_id='".db_real_escape_string($_POST['id'])."' and fo_user='".$_SESSION['user_id']."'";
  db_query($up);
}
  header("Location: ".$ust['adres']."user/moje-zdjecia/");
  exit();




?>