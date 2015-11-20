<?php 
session_start();
include("../db_connect.php");

if($_SESSION['logadm']=="adm")
{
	if($_POST['e']=="1")
	{
		db_query("UPDATE ".$pre."dane SET d_nazwa='".htmlspecialchars($_POST['nazwa'])."',d_eng='".htmlspecialchars($_POST['eng'])."',d_nz='".htmlspecialchars($_POST['nz'])."',d_ez='".htmlspecialchars($_POST['ez'])."' WHERE d_id='".db_real_escape_string($_POST['id'])."'");
		header("Location: index.php?page=ustawienia&action=dane&typ=".htmlspecialchars($_POST['typ'])."&v=ed");
		exit();
	}
	else
	{
		$in="INSERT INTO ".$pre."dane(`d_nazwa`,`d_typ`,`d_eng`,`d_nz`,`d_ez`)VALUES('".htmlspecialchars($_POST['nazwa'])."','".htmlspecialchars($_POST['typ'])."','".htmlspecialchars($_POST['eng'])."','".htmlspecialchars($_POST['nz'])."','".htmlspecialchars($_POST['ez'])."')";
		db_query($in);
		header("Location: index.php?page=ustawienia&action=dane&typ=".htmlspecialchars($_POST['typ'])."&v=dodane");
	}

}

?>