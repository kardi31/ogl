<?php 
include("subheader.php");
if($_POST[nhzi])
{
$Query='SELECT * FROM '.$pre.'user WHERE user_login="'.db_real_escape_string($_POST['login']).'" and user_akt="1"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
$id=$row['user_id'];
$login=$row['user_login'];
$email=$row['user_email'];
}

if($id!="")
{
  $nhn=rand(11111,99999999);
  $nh=md5($nhn);
  $up="UPDATE ".$pre."user SET user_haslo='".$nh."' WHERE user_id='".$id."'";
  db_query($up);

$em=new Smarty();
$em->assign("$adres", $ust['adres']);
$em->assign("$nazwa", $ust['nazwa']);
$em->assign("haslo", $nhn);

$tresc = $em->fetch($ust['templates'].'/email.zapomniane.haslo.tpl');

$head = "From: ".$ust['email']." <".$ust['email'].">";
$head .= "\r\n";
$head .= "Content-type: text/html; charset=UTF-8\r\n";

@nw_mail($ust['email'],$email,"".$lang['525']." ".$ust['nazwa'], $tresc, $head);

  $smarty->assign("akt",'1');

}
else
{
  $smarty->assign("akt",'2');
}
}
$smarty->assign("title",$lang['478'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/zapomniane.haslo.tpl');

?>
