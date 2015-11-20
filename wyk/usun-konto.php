<?php 
session_start();
include("../db_connect.php");
include("../include/ust.php");


if($_SESSION['user_id']>=1)
{

	$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.$_SESSION['user_id'].'"'; 
	$result = db_query($Query) or die(db_error());
	while ($row = db_fetch($result)) 
	{
		$haslo=$row['user_haslo'];
		$user_id=$row['user_id'];
	}

	if(md5($_POST['sh'])==$haslo)
	{


		$del="DELETE FROM ".$pre."user WHERE user_id='".db_real_escape_string($user_id)."'";
		db_query($del);
		
		$del="DELETE FROM ".$pre."szukam WHERE s_user='".db_real_escape_string($user_id)."'";
		db_query($del);
		
		$del="DELETE FROM ".$pre."ankieta WHERE a_user='".db_real_escape_string($user_id)."'";
		db_query($del);

		$Query='SELECT * FROM '.$pre.'friend WHERE fo_od="'.db_real_escape_string($user_id).'" or fo_do="'.db_real_escape_string($user_id).'"'; 
		$result = db_query($Query) or die(db_error());
		while ($row = db_fetch($result)) 
		{
			$del="DELETE FROM ".$pre."friend WHERE fo_id='".$row['fo_id']."'";
			db_query($del);
		}
		
		$Query='SELECT * FROM '.$pre.'komentarze WHERE kom_idu="'.db_real_escape_string($user_id).'"'; 
		$result = db_query($Query) or die(db_error());
		while ($row = db_fetch($result)) 
		{
			$del="DELETE FROM ".$pre."komentarze WHERE kom_id='".$row['kom_id']."'";
			db_query($del);
		}
		
		$Query='SELECT * FROM '.$pre.'pw WHERE pw_od="'.db_real_escape_string($user_id).'" or pw_do="'.db_real_escape_string($user_id).'"'; 
		$result = db_query($Query) or die(db_error());
		while ($row = db_fetch($result)) 
		{
			$del="DELETE FROM ".$pre."pw WHERE pw_id='".$row['pw_id']."'";
			db_query($del);
		}
		
		$Query='SELECT * FROM '.$pre.'foto WHERE fo_user="'.db_real_escape_string($user_id).'"'; 
		$result = db_query($Query) or die(db_error());
		while ($row = db_fetch($result)) 
		{
			@unlink("../upload/zdjecia/".$row['fo_fm']);
			@unlink("../upload/zdjecia/".$row['fo_fd']);
			$del="DELETE FROM ".$pre."foto WHERE fo_id='".$row['fo_id']."'";
			db_query($del);
		}


		unset($_SESSION['logadm']);
		unset($_SESSION['user_nick']);
		unset($_SESSION['user_id']);
		unset($_SESSION['user_t']);
		setcookie("autologin", "", time()-86400000);

		header("Location: ".$ust['adres']."user/usun-konto/2");
		exit();
	}

}
else
{

}

header("Location: ".$ust['adres']."user/usun-konto/1")


?>