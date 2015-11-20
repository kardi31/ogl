<?php 
session_start();
include("../db_connect.php");
include("../include/function.php");
include("../admin/namen.php");

if($_SESSION['user_id']>=1)
{

  if($_POST['nazwa']<>"")
  {

    $in="INSERT INTO ".$pre."temat(`t_nazwa`, `t_user`, `t_g`, `t_data`, `t_dataz`,`t_ile`)VALUES('".htmlspecialchars($_POST['nazwa'])."', '".$_SESSION['user_id']."', '".htmlspecialchars($_GET['id'])."', NOW(), NOW(),'0')";
    db_query($in);
    $idi=db_insert_id();
    $del=md5($idi."-".rand(0,200));
    $up="UPDATE ".$pre."temat SET t_del='".$del."' WHERE t_id='".$idi."'";
    db_query($up);
    $in="INSERT INTO ".$pre."komentarze(`kom_nick`, `kom_tresc`, `kom_data`, `kom_typ`, `kom_idk`, `kom_idu`) VALUES ('".htmlspecialchars($_SESSION['user_nick'])."', '".htmlspecialchars($_POST['tresc'])."', NOW(), 'gr', '".$idi."', '".$_SESSION['user_id']."')";
    db_query($in);
  }
  else
  {
    header("Location: ../grupa/".$_GET['id']."/".$_GET['nazwa']."_create:pn");
    exit();
  }

}

header("Location: ../temat/".$idi."/".namen($_POST['nazwa'])."");

?>