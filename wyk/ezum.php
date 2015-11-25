<?php 
session_start();
include("../db_connect.php");
include("../include/ust.php");


if($_SESSION['user_id']>=1)
{


  $up="UPDATE ".$pre."mov SET fo_cena='".htmlspecialchars($_POST['cena'])."',fo_opis='".htmlspecialchars($_POST['opis'])."',fo_fd='".htmlspecialchars($_POST['nazwa'])."' WHERE fo_id='".db_real_escape_string($_POST['id'])."' and fo_user='".$_SESSION['user_id']."'";
  db_query($up);
}
  header("Location: /user/moje-filmy/");
  exit();




?>