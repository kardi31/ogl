<?php 
session_start();
include("../db_connect.php");
include("../include/ust.php");
include("../admin/namen.php");
include("../include/function.php");

if($_SESSION['user_id']>=1)
{
   if($_GET['del']=="grupa")
   {

      $Query='SELECT * FROM '.$pre.'grupa WHERE g_del="'.db_real_escape_string($_GET['id']).'"'; 
      $result = db_query($Query) or die(db_error());
      while ($row = db_fetch($result)) 
      {
         $g_id=$row['g_id'];
      }

      $Query='SELECT * FROM '.$pre.'temat WHERE t_g="'.$g_id.'"'; 
      $result = db_query($Query) or die(db_error());
      while ($row = db_fetch($result)) 
      {
         $del="DELETE FROM ".$pre."temat WHERE t_id='".$row['t_id']."'";
         db_query($del);

         $Query1='SELECT * FROM '.$pre.'komentarze WHERE kom_idk="'.$row['t_id'].'" and kom_typ="gr"'; 
         $result1 = db_query($Query1) or die(db_error());
         while ($row1 = db_fetch($result1)) 
         {
            $del1="DELETE FROM ".$pre."komentarze WHERE kom_idk='".$row1['kom_id']."'";
            db_query($del1);
         }
      }

      $Query='SELECT * FROM '.$pre.'czlonkowie WHERE c_g="'.$g_id.'"'; 
      $result = db_query($Query) or die(db_error());
      while ($row = db_fetch($result)) 
      {
         $del="DELETE FROM ".$pre."czlonkowie WHERE c_id='".$row['c_id']."'";
         db_query($del);
      }
      
      $delg="DELETE FROM ".$pre."grupa WHERE g_id='".$g_id."'";
      db_query($delg);

      header("Location: ".$ust['adres']."grupy/del-g/ok/");
      exit();

   }
   else if($_GET['del']=="temat")
   {

      $Query='SELECT * FROM '.$pre.'temat WHERE t_del="'.db_real_escape_string($_GET['id']).'"'; 
      $result = db_query($Query) or die(db_error());
      while ($row = db_fetch($result)) 
      {
         $t_id=$row['t_id'];
         $g_id=$row['t_g'];
      }

      $Query1='SELECT * FROM '.$pre.'komentarze WHERE kom_idk="'.$t_id.'" and kom_typ="gr"'; 
      $result1 = db_query($Query1) or die(db_error());
      while ($row1 = db_fetch($result1)) 
      {
         $del1="DELETE FROM ".$pre."komentarze WHERE kom_idk='".$row1['kom_id']."'";
         db_query($del1);
      }

      $Query='SELECT * FROM '.$pre.'grupa WHERE g_id="'.$g_id.'"'; 
      $result = db_query($Query) or die(db_error());
      while ($row = db_fetch($result)) 
      {
         $g_nazwa=$row['g_nazwa'];
      }

      $delt="DELETE FROM ".$pre."temat WHERE t_id='".$t_id."'";
      db_query($delt);

      header("Location: ".$ust['adres']."grupa/".$g_id."/".namen($g_nazwa)."_del-t:ok");
      exit();
   }

   else if($_GET['del']=="post")
   {

      $Query1='SELECT * FROM '.$pre.'komentarze WHERE kom_del="'.db_real_escape_string($_GET['id']).'" and kom_typ="gr"'; 
      $result1 = db_query($Query1) or die(db_error());
      while ($row1 = db_fetch($result1)) 
      {
         $kom_idk=$row1['kom_idk'];
         $kom_id=$row1['kom_id'];
      }

      $Query='SELECT * FROM '.$pre.'temat WHERE t_id="'.$kom_idk.'"'; 
      $result = db_query($Query) or die(db_error());
      while ($row = db_fetch($result)) 
      {
         $t_id=$row['t_id'];
         $g_id=$row['t_g'];
         $t_nazwa=$row['t_nazwa'];
      }

      $up="UPDATE ".$pre."temat SET t_ile=t_ile-1 WHERE t_id='".$t_id."'";
      db_query($up);

      $delk="DELETE FROM ".$pre."komentarze WHERE kom_id='".$kom_id."'";
      db_query($delk);

      header("Location: ".$ust['adres']."temat/".$t_id."/".namen($t_nazwa)."_del-p:ok");
      exit();
   }
}



?>