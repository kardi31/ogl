<?php 
session_start();
include('../db_connect.php');

if($_SESSION['logadm']=="adm")
{

$uid=$_POST['uid'];


    $up="UPDATE ".$pre."user SET user_money='".$_POST['punkty']."', user_vip='".strtotime($_POST['vip'])."' WHERE user_id='".db_real_escape_string($uid)."'";
    db_query($up);



    header('Location: index.php?page=user&action=view&id='.$uid.'&e=1');
    exit();
  
}

header('Location: index.php?page=cat&action=&e=2');

?>