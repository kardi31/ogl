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


if($_GET['p']=="v")
{

	$Query='SELECT * FROM '.$pre.'dni WHERE dni_id="'.db_real_escape_string($_GET['id']).'" ORDER by dni_dni ASC'; 
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


	$in="INSERT INTO ".$pre."zamowienia(`za_pakiet`,`za_user`,`za_data`,`za_cena`,`za_punkty`)VALUES('pay','".$_SESSION['user_id']."',NOW(),'".$p_dnicena."','".$p_dniid."')";
	db_query($in);
	$idz=db_insert_id();
	
	$go_pay=array();
	$go_pay['koszt']=$p_dnicena;
	$go_pay['id']=$idz;
	$go_pay['opis']="".$lang['602']." ".$p_dni." ".$lang['603']."";
	$go_pay['pow_url']=$ust['adres']."doladuj-konto/stan:1";

	include("include/pay_go.php");
	exit();

}
if($_GET['p']=="pkt")
{
	$cena=$_POST['ilepkt']*$ust['cenapkt'];
	$in="INSERT INTO ".$pre."zamowienia(`za_pakiet`,`za_user`,`za_data`,`za_cena`,`za_punkty`)VALUES('pkt','".$_SESSION['user_id']."',NOW(),'".$cena."','".htmlspecialchars($_POST['ilepkt'])."')";
	db_query($in);
	$idz=db_insert_id();
	
	$go_pay=array();
	$go_pay['koszt']=$cena;
	$go_pay['id']=$idz;
	$go_pay['opis']="".$lang['509']."";
	$go_pay['pow_url']=$ust['adres']."doladuj-konto/stan:11";

	include("include/pay_go.php");
	exit();

	
}

?>