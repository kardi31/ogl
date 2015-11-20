<?php 
include("subheader.php");



$zapytanie = "SELECT * FROM ".$pre."faq LEFt JOIN ".$pre."user ON user_id=faq_user ORDER by faq_dateadded DESC,faq_id DESC";

if(!$strona){
$nr=$_GET["strona"];
if($nr==0)
{
$nr=1;
}

$strona=$nr;
}


$ile=100;

$start=($strona-1)*$ile;     

$wykonaj = db_query($zapytanie) or Die("Nie działa zapytanie". $zapytanie);
$ile_rek = db_num_rows($wykonaj);

$podstron = ceil($ile_rek/$ile);

$zapytanie.= " LIMIT $start,$ile";    

$final = db_query($zapytanie) or Die ("Nie działa zapytanie końcowe");
$i=1;
while ($row = db_fetch($final)) 
{

$faq_id[]=$row['faq_id'];
$faq_nazwa[]=$row['faq_nazwa'];
$faq_opis[]=$row['faq_tresc'];
$faq_data[]=date("d-m-Y",$row['faq_data']);
$faq_user_id[]=$row['user_id'];
$faq_user_login[]=$row['user_login'];
$faq_user_loginn[]=namen($row['user_login']);
$faq_img[]=$row['user_fotka'];
$faq_plecnr[]=$row['user_plec'];
}

$smarty->assign("faq_id",$faq_id);
$smarty->assign("faq_nazwa",$faq_nazwa);
$smarty->assign("faq_opis",$faq_opis);
$smarty->assign("faq_data",$faq_data);
$smarty->assign("faq_user_id",$faq_user_id);
$smarty->assign("faq_user_login",$faq_user_login);
$smarty->assign("faq_user_loginn",$faq_user_loginn);
$smarty->assign("faq_img",$faq_img);
$smarty->assign("faq_plecnr",$faq_plecnr);

$smarty->assign("title",'Ogłoszenia - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/faq.tpl');

?>
