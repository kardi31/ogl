<?php 
session_start();
include("../db_connect.php");
if($_SESSION['logadm']=="adm")
{

$up="UPDATE ".$pre."ustawienia SET ust_rtop='".$_POST['rtop']."', ust_rpro='".$_POST['rpro']."', ust_rmenu='".$_POST['rmenu']."', ust_rfot='".$_POST['rfot']."', ust_rtopu='".htmlspecialchars($_POST['rtopu'])."', ust_rprou='".htmlspecialchars($_POST['rprou'])."', ust_rmenuu='".htmlspecialchars($_POST['rmenuu'])."', ust_rfotu='".htmlspecialchars($_POST['rfotu'])."' WHERE ust_id='1'";
db_query($up);

}
header("Location: index.php?page=ustawienia&action=reklama&e=1");
?>