<?php 
include("subheader.php");



$zapytanie = "SELECT * FROM ".$pre."news WHERE news_wys='1' ORDER by news_id DESC";

if(!$strona){
$nr=$_GET["strona"];
if($nr==0)
{
$nr=1;
}

$strona=$nr;
}


$ile=10;

$start=($strona-1)*$ile;     

$wykonaj = db_query($zapytanie) or Die("Nie działa zapytanie". $zapytanie);
$ile_rek = db_num_rows($wykonaj);

$podstron = ceil($ile_rek/$ile);

$zapytanie.= " LIMIT $start,$ile";    

$final = db_query($zapytanie) or Die ("Nie działa zapytanie końcowe");
$i=1;
while ($row = db_fetch($final)) 
{

$news_tytul[]=$row['news_tytul'];
$news_tytul_n[]=namen($row['news_tytul']);
$news_tresc[]=$row['news_tresc'];
$news_data[]=$row['news_data'];
$news_autor[]=$row['news_user'];
$news_autorn[]=namen($row['news_user']);
$news_autorid[]=$row['news_userid'];
$news_id[]=$row['news_id'];

}

$smarty->assign("news_tytul",$news_tytul);
$smarty->assign("news_tytul_n",$news_tytul_n);
$smarty->assign("news_tresc",$news_tresc);
$smarty->assign("news_data",$news_data);
$smarty->assign("news_autor",$news_autor);
$smarty->assign("news_autorn",$news_autorn);
$smarty->assign("news_autorid",$news_autorid);
$smarty->assign("news_id",$news_id);
$smarty->assign("podstron",$podstron);
$smarty->assign("strona",$strona);

$smarty->assign("title",$lang['461'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/news_index.tpl');

?>
