<?php 
session_start();
include('db_connect.php');
include('include/function.php');
include('include/ust.php');

if($_COOKIE['lang']<>"" and isset($_COOKIE['lang']) and strlen($_COOKIE['lang'])<=3)
{
	$u_usr['lang']=substr($_COOKIE['lang'],0,3);
}
else
{
	$u_usr['lang']=$ust['lang_d'];
}

include("lang/".$u_usr['lang']."/site.php");

include('include/pay_get_p.php');

if($get_pay['id_o']>=1)
{

	$Query='SELECT * FROM '.$pre.'zamowienia WHERE za_id="'.db_real_escape_string($get_pay['id_o']).'"'; 
	$result = db_query($Query) or die(db_error());
	while ($row = db_fetch($result)) 
	{
		$za_cena=$row['za_cena'];
		$za_pakiet=$row['za_pakiet'];
		$za_id=$row['za_id'];
		$za_punkty=$row['za_punkty'];
		$za_user=$row['za_user'];
	}

	$Query='SELECT * FROM '.$pre.'dni WHERE dni_id="'.db_real_escape_string($za_punkty).'" ORDER by dni_dni ASC'; 
	$result = db_query($Query) or die(db_error());
	while ($row = db_fetch($result)) 
	{
		$p_dni=$row['dni_dni'];
		$p_pkt=$row['dni_pkt'];
		$p_cpkt=$row['dni_cpkt'];
		$p_dniid=$row['dni_id'];
		$p_dnicena=$row['dni_cena'];
		$p_dnicenasms=$row['dni_cenasms'];
		$p_dninumer=$row['dni_numer'];
		$p_dnikod=$row['dni_kod'];
		$p_dnitresc=$row['dni_tresc'];
		$p_dnismspkt=$row['dni_sms_pkt'];
		$p_dnipaykod=$row['dni_pay_kod'];
		$p_dnipaypkt=$row['dni_pay_pkt'];
	}
	
	$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($za_user).'" LIMIT 1'; 
	$result = db_query($Query) or die(db_error());
	while ($row = db_fetch($result)) 
	{
		$user_end=$row['user_vip'];
	}
	
	
	if($get_pay['kwota']>=$za_cena AND $get_pay['status']=="ok" AND $za_id>=1)
	{
		if($za_pakiet=="pkt")
		{

			$up="UPDATE ".$pre."user SET user_money=user_money+".$za_punkty." WHERE user_id=".$za_user."";           
			db_query($up);
			$up="UPDATE ".$pre."zamowienia SET za_op='1' WHERE za_id=".$za_id."";           
			db_query($up);
			$in="INSERT INTO ".$pre."pw(`pw_tytul`, `pw_tresc`, `pw_od`, `pw_do`, `pw_data`, `pw_typ`)VALUES('".$lang['513']."','".$lang['514']." ".$za_punkty."', '0', '".$za_user."', NOW(), '1')";
			db_query($in);
		}
		if($za_pakiet=="pay")
		{
			$t=$p_dni*24*60*60;
			
			if($user_end>=time())
			{
				$prom=$user_end+$t;
			}
			else
			{
				$prom=time()+$t;
			}
			
			$up="UPDATE ".$pre."user SET user_money=user_money+".$p_pkt.", user_vip='".$prom."' WHERE user_id=".$za_user."";           
			db_query($up);
			$up="UPDATE ".$pre."zamowienia SET za_op='1' WHERE za_id=".$za_id."";           
			db_query($up);
			$in="INSERT INTO ".$pre."pw(`pw_tytul`, `pw_tresc`, `pw_od`, `pw_do`, `pw_data`, `pw_typ`)VALUES('".$lang['515']."','".$lang['516']."', '0', '".$za_user."', NOW(), '1')";
			db_query($in);
		}
	}

}


?>