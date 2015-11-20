<?php 
session_start();
include("../db_connect.php");
include("../include/function.php");
include("../include/namen.php");
if($_SESSION['user_id']>=1)
{

  if($_POST['nazwa']<>"")
  {

    $in="INSERT INTO ".$pre."grupa(`g_nazwa`, `g_user`, `g_typ`, `g_data`)VALUES('".htmlspecialchars($_POST['nazwa'])."', '".$_SESSION['user_id']."', '".htmlspecialchars($_POST['typ'])."', NOW())";
    db_query($in);
    $idi=db_insert_id();
    $del=md5($idi."-".rand(0,200));
    $up="UPDATE ".$pre."grupa SET g_del='".$del."' WHERE g_id='".$idi."'";
    db_query($up);
    $in="INSERT INTO ".$pre."czlonkowie(`c_user`, `c_g`, `c_akt`)VALUES('".$_SESSION['user_id']."', '".$idi."', '1')";
    db_query($in);

  }
  else
  {
    header("Location: ../grupy/create/pn/");
    exit();
  }

}

header("Location: ../grupa/".$idi."/".namen($_POST['nazwa'])."_add_g:ok");

?>