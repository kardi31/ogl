<?php 
session_start();
include('../db_connect.php');

if($_SESSION['logadm']=="adm")
{
  if($_POST['nazwa']!="")
  {
    $in = 'INSERT INTO `'.$pre.'faq`(`faq_nazwa`, `faq_tresc`,`faq_data`,`faq_user`)VALUES("'.$_POST['nazwa'].'", "'.$_POST['tresc'].'","'.time().'","'.$_SESSION['user_id'].'")';
    db_query($in);
  }
  else
  { 
     header('Location: index.php?page=faq&action=&e=n');
     exit();
  }

}

header('Location: index.php?page=faq&action=&e=1');

?>