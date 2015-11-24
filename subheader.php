<?php 
session_start();

include_once("db_connect.php");



if($install<>"ok"){echo'Skrypt nie jest zainstalowany / The script is not installed. <a href="install.php">zainstaluj / install</a>';exit();}

include_once("include/function.php");
include_once("include/ust.php");
include_once("include/namen.php");
include_once("include/login.php");
include_once("include/usersOnline.class.php");
require_once('include/recaptchalib.php');
include_once("./include/pay_set.php");
require 'libs/Smarty.class.php';

if($_COOKIE['lang']<>"" and isset($_COOKIE['lang']) and strlen($_COOKIE['lang'])<=3)
{
	$u_usr['lang']=substr($_COOKIE['lang'],0,3);
}
else
{
	$u_usr['lang']=$ust['lang_d'];
}


include("lang/".$u_usr['lang']."/site.php");

$smarty = new Smarty;


$publickey = "6Le6YbsSAAAAAOG-MixBqF_bJ1HVqdExvZPmIbAy"; // you got this from the signup page
$privatekey = "6Le6YbsSAAAAAF8gb5L6eVXlEd2eFXjQ2aK__u1y";


$smarty->assign("token_img",recaptcha_get_html($publickey));
$visitors_online = new usersOnline();


$strona_panel="ok";


$smarty->caching=0;
$smarty->assign("fb_login",$ust['fb_on']);
$smarty->assign("pay_set",$pay_set);
$smarty->assign("pay_typ",$ust['pay_typ']);
$smarty->assign("pay_typ_sms",$ust['pay_typ_sms']);
$smarty->assign("meta_desc",$ust['meta_desc']);
$smarty->assign("meta_key",$ust['meta_key']);
$smarty->assign("meta_title",$ust['meta_title']);
$smarty->assign("site_url",$ust['adres']);
$smarty->assign("site_nazwa",$ust['nazwa']);
$smarty->assign("user_nick",$_SESSION['user_nick']);
$smarty->assign("user_nickn",namen($_SESSION['user_nick']));
$smarty->assign("user_id",$_SESSION['user_id']);
$smarty->assign("user_adm",$_SESSION['logadm']);
$smarty->assign("gift_on",$ust['gift']);
$smarty->assign("templa",$ust['templates']);
$smarty->assign("oglp",$ust['oglp']);
$smarty->assign("u_usr",$u_usr);
$smarty->assign("lang",$lang);
$smarty->assign("gtime",time());

//Reklama
$smarty->assign("rtop",$ust['r_top']);
$smarty->assign("rtopu",$ust['r_topu']);
$smarty->assign("rpro",$ust['r_pro']);
$smarty->assign("rprou",$ust['r_prou']);
$smarty->assign("rmenu",$ust['r_menu']);
$smarty->assign("rmenuu",$ust['r_menuu']);
$smarty->assign("rfot",$ust['r_fot']);
$smarty->assign("rfotu",$ust['r_fotu']);
//Reklama

$smarty->assign("u_ko",$ust['uko']);
$smarty->assign("u_kv",$ust['ukv']);
$smarty->assign("vip_o",$ust['ovip']);
$smarty->assign("vip_k",$ust['kvip']);
$smarty->assign("vip_p",$ust['pvip']);
$smarty->assign("vip_pw",$ust['pwvip']);
$smarty->assign("wiek_start",$ust['wiek_start']);
$smarty->assign("wiek_max",$ust['wiek_max']);
$smarty->assign("ust_wiek",$ust['wiek']);
$smarty->assign("vip_time",time());

$smarty->assign("cookie_on",$ust['cookie_on']);
$smarty->assign("cookie_get",$_COOKIE['cookie_off']);

$smarty->assign("lang_on",$ust['lang_on']);
$smarty->assign("lang_d",$ust['lang_d']);


$smarty->assign("background",$ust['ust_background']);

if($_SESSION['user_id']>=1)
{
$Querys='SELECT * FROM '.$pre.'user WHERE user_id='.$_SESSION['user_id'].''; 
$results = db_query($Querys) or die(db_error());
while ($rows = db_fetch($results)) 
{
$smarty->assign("user_ile_money",$rows['user_money']);
$user_ile_money=$rows['user_money'];
if($rows['user_vip']>=1){$smarty->assign("vipendd",$rows['user_vip']);$smarty->assign("vipend",date("Y.m.d",$rows['user_vip']));}else{$smarty->assign("vipend","0");}
}
$smarty->assign("get_user_prezenty",get_user_prezenty($_SESSION['user_id']));

}

//------


if($_GET['v']=="delete-zaproszenie")
{

$del="DELETE FROM ".$pre."friend WHERE fo_id='".db_real_escape_string($_GET['id'])."' and fo_do='".$_SESSION['user_id']."' ";
db_query($del);
$smarty->assign("del-zaproszenie","ok");

}


if($_GET['v']=="zatwierdz")
{

$del="UPDATE ".$pre."friend SET fo_akt=1 WHERE fo_id='".db_real_escape_string($_GET['id'])."' and fo_do='".$_SESSION['user_id']."' ";
db_query($del);

}

//------

if($_GET['enter']=="ok")
{
	$_SESSION['user_18']="ok";
}

if($ust['kos']=="1" and $_SESSION['user_18']!="ok")
{

	$smarty->display($ust['templates'].'/page_18.tpl');
	exit();

}


include("left.php");
include("right.php");
?>