<?php 
session_start();
include("../db_connect.php");
include("../include/ust.php");
include("../include/function.php");

if($_SESSION['user_id']>=1)
{

	$ds_szi=$_POST['szukam'];
	$ds_jes=$_POST['jestem'];

	if(count($ds_szi)>=1)
	{
		foreach($ds_szi as $dj)
		{
			$ds_szukam=$ds_szukam.$dj."|";
		}
	}
	if(count($ds_jes)>=1)
	{
		foreach($ds_jes as $dj)
		{
			$ds_jestem=$ds_jestem.$dj."|";
		}
	}

	$up="UPDATE ".$pre."user SET user_stc='".htmlspecialchars($_POST['stc'])."',user_wyks='".htmlspecialchars($_POST['wyks'])."',user_dzieci='".htmlspecialchars($_POST['dzieci'])."',user_jestem='".htmlspecialchars($ds_jestem)."',user_wzrost='".htmlspecialchars($_POST['wzrost'])."',user_alkochol='".htmlspecialchars($_POST['alkochol'])."',user_pale='".htmlspecialchars($_POST['papierosy'])."',user_woj='".htmlspecialchars($_POST['woj'])."',user_miasto='".htmlspecialchars($_POST['miasto'])."', user_kolor_oczu='".htmlspecialchars($_POST['koczy'])."',user_kolor_wlosu='".htmlspecialchars($_POST['kwlosy'])."',user_budowa_ciala='".htmlspecialchars($_POST['sylwetka'])."',user_szukam='".htmlspecialchars($ds_szukam)."', user_d='".htmlspecialchars($_POST['d'])."', user_m='".htmlspecialchars($_POST['m'])."', user_y='".htmlspecialchars($_POST['y'])."', user_gg='".htmlspecialchars($_POST['gg'])."', user_www='".htmlspecialchars($_POST['www'])."', user_omnie='".htmlspecialchars($_POST['omnie'])."', user_plec='".htmlspecialchars($_POST['plec'])."', user_ue='".htmlspecialchars($_POST['ue'])."' WHERE user_id='".$_SESSION['user_id']."'";
	db_query($up);

	header("Location: ".$ust['adres']."user/panel/4");
	exit();
}

header("Location: ".$ust['adres']."user/panel/3")


?>