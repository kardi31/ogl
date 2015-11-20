<?php 
session_start();
include('../db_connect.php');

if($_SESSION['logadm']=="adm")
{
  if($_POST['nazwa']!="")
  {
    $in = 'INSERT INTO `'.$pre.'cat`(`cat_nazwa`)VALUE("'.$_POST['nazwa'].'")';
    db_query($in);
  }
  else
  { 
     header('Location: index.php?page=cat&action=&e=n');
     exit();
  }

}

header('Location: index.php?page=cat&action=&e=1');

?>