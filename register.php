<?php 
include("subheader.php");



if($_POST['register']){

if($_POST['login']=="" or db_num_rows(db_query("SELECT user_login FROM ".$pre."user WHERE user_login='".db_real_escape_string($_POST['login'])."'")))
{
 $smarty->assign("l","1");
 $l=1;
}
else
{
 $l=0;
}
if(!preg_match( "/^[a-zA-Z0-9-_]+$/" , $_POST['login'] ))
{
 $smarty->assign("ler","1");
 $ner=1;
}
else
{
 $ner=0;
}



if($_POST['haslo']=="")
{
 $smarty->assign("h","1");
 $h=1;
}
else
{
 $h=0;
}

if($_POST['plec']=="")
{
 $smarty->assign("e_plec","1");
 $e_plec=1;
}
else
{
 $e_plec=0;
}

if($_POST['y']=="" or $_POST['m']=="" or $_POST['d']=="")
{
 $smarty->assign("e_wiek","1");
 $e_wiek=1;
}
else
{
 $e_wiek=0;
}

if($_POST['regulamin']=="")
{
 $smarty->assign("reg","1");
 $reg=1;
}
else
{
 $reg=0;
}

$ile_email  = db_num_rows(db_query("SELECT user_email FROM ".$pre."user WHERE user_email='".db_real_escape_string($_POST['email'])."'"));

if($ile_email>=1)
{
 $smarty->assign("ei","1");
 $ei=1;
}
else
{
 $ei=0;
}

if(!spremail($_POST['email']) )
{
 $smarty->assign("e","1");
 $e=1;
}
else
{
 $e=0;
}




$resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);





if($ust['token_r']==1)
{
 if (!$resp->is_valid)
 {
   $smarty->assign("t","1");
   $t=1;
 }
 else
 {
   $t=0;
 }
}
else
{
 $t=0;
}

if($l==0 and $h==0 and $e==0 and $ei==0  and $t==0 and $reg==0 and $e_wiek==0 and $e_plec==0 and $ner==0)
{

if($ust['akt_r']==0){$aktr=1;}else{$aktr=0;}

$kod=md5($_POST['login']."-".$_POST['email'].":".$_POST['haslo']);

$md5a=md5($_POST['login']."-".$_POST['email'].":".$_POST['haslo']."-".time());

$in="INSERT INTO ".$pre."user(`user_login`, `user_haslo`, `user_email`, `user_akt`, `user_data_r`, `user_kod`,`user_md5`, `user_plec`, `user_d`, `user_m`, `user_y`,`user_money`)VALUES('".htmlspecialchars($_POST['login'])."', '".md5($_POST['haslo'])."', '".htmlspecialchars($_POST['email'])."', '".$aktr."', NOW(), '".$kod."','".$md5a."', '".htmlspecialchars($_POST['plec'])."', '".htmlspecialchars($_POST['d'])."', '".htmlspecialchars($_POST['m'])."', '".htmlspecialchars($_POST['y'])."','".$ust['give']."')";
db_query($in);

$user_id=db_insert_id();

$inn="INSERT INTO ".$pre."ankieta(`a_user`)VALUES('".$user_id."')";
db_query($inn);
$inn="INSERT INTO ".$pre."szukam(`s_user`)VALUES('".$user_id."')";
db_query($inn);

$email=$_POST['email'];
$smarty->assign("regok","1");

if($ust['akt_r']==1)
{


$em=new Smarty();
$em->assign("adres", $ust['adres']);
$em->assign("nazwa", $ust['nazwa']);
$em->assign("kod", $kod);
$em->assign("lang", $lang);
$tresc = $em->fetch($ust['templates'].'/email.aktywacja.tpl');

$head = "From: ".$ust['email']." <".$ust['email'].">";
$head .= "\r\n";
$head .= "Content-type: text/html; charset=UTF-8\r\n";

@nw_mail($ust['email'],$email,"Aktywacja konta", $tresc, $head);

$smarty->assign("send","1");  
}
else
{
$smarty->assign("send","2"); 
}

}

$smarty->assign("lt", htmlspecialchars($_POST['login']));
$smarty->assign("et", htmlspecialchars($_POST['email']));
$smarty->assign("plec", htmlspecialchars($_POST['plec']));
$smarty->assign("d", htmlspecialchars($_POST['d']));
$smarty->assign("m", htmlspecialchars($_POST['m']));
$smarty->assign("y", htmlspecialchars($_POST['y']));
$smarty->assign("regulamin", htmlspecialchars($_POST['regulamin']));
}


$smarty->assign("givereg", $ust['give']);
$smarty->assign("tokenr",$ust['token_r']);
$smarty->assign("rejestracja",$ust['rejestracja']);

$smarty->assign("title","Rejestracja ".$ust['nazwa']);

$smarty->display($ust['templates'].'/register.tpl');

?>
