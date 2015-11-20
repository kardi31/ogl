<?php 
session_start();
include("../db_connect.php");
if($_SESSION['logadm']=="adm")
{

$up="UPDATE ".$pre."ustawienia SET ust_popr='".$_POST['popr']."' WHERE ust_id='1'";
db_query($up);

}
header("Location: index.php?page=ustawienia&action=popr&e=5#popr");
?>