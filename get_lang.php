<?php 
session_start();


if($_GET['s']=="install" and $_POST['lang']<>"")
{
	setcookie("lang",$_POST['lang'] , time()+86400, "/");   
	header("Location: ".$_SERVER['HTTP_REFERER']."?step=1");
	exit();
}

else if($_GET['lang']<>"")
{
	include("db_connect.php");
	include("include/function.php");
	include("include/ust.php");
	setcookie("lang",substr($_GET['lang'],0,3) , time()+86400, "/");   

	if($_SERVER['HTTP_REFERER']<>"")
	{
		header("Location: ".$_SERVER['HTTP_REFERER']."");
		exit();
	}
	else if($_SERVER['HTTP_REFERER']=="" and $_GET['admin']=="1")
	{
		header("Location: ".$ust['adres']."admin");
		exit();
	}
	else
	{
		header("Location: ".$ust['adres']."");
		exit();
	}

}
else
{
	header("Location: ".$ust['adres']."");
	exit();
}
?>