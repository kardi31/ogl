<?php 
session_start();
include('../db_connect.php');

if($_SESSION['logadm']=="adm")
{

$uid=$_POST['uid'];


  if($_POST['noh']!="")
  {
 
    $up="UPDATE ".$pre."user SET user_haslo='".md5($_POST['noh'])."' WHERE user_id='".db_real_escape_string($uid)."'";
    db_query($up);
    $nh="&nh=1";
  }
else
{
    $nh="&nh=2";
}


    header('Location: index.php?page=user&action=view&id='.$uid.''.$nh);
    exit();
  
}

header('Location: index.php?page=cat&action=&e=2');

?>