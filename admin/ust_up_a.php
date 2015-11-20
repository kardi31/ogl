<?php 
session_start();
include("../db_connect.php");
if($_SESSION['logadm']=="adm")
{

$up="UPDATE ".$pre."ustawienia SET ust_aocena='".htmlspecialchars($_POST['aocena'])."', ust_akomentarze='".htmlspecialchars($_POST['akomentowanie'])."', ust_ta='".htmlspecialchars($_POST['at'])."' WHERE ust_id='1'";
db_query($up);

}
header("Location: index.php?page=ustawienia&action=artykuly&e=3#artykuly");
?>