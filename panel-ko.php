<?php 
include("subheader.php");



$Querys='SELECT * FROM '.$pre.'ko WHERE  ko_fuser="'.$_SESSION['user_id'].'" ORDER by ko_id DESC'; 
$results = db_query($Querys) or die(db_error());
while ($rows = db_fetch($results)) 
{


$ko_data[]=$rows['ko_data'];
$ko_ocena[]=$rows['ko_ocena'];
$ko_foto[]=$rows['ko_foto'];

$zapytanie ='SELECT * FROM '.$pre.'user WHERE user_akt="1" and user_id="'.$rows['ko_user'].'"'; 

if(!$strona){
$nr=$_GET["strona"];
if($nr==0)
{
$nr=1;
}

$strona=$nr;
}


$ile=36;

$start=($strona-1)*$ile;     

$wykonaj = db_query($zapytanie) or Die("Nie działa zapytanie". $zapytanie);
$ile_rek = db_num_rows($wykonaj);

$podstron = ceil($ile_rek/$ile);

$zapytanie.= " LIMIT $start,$ile";    

$final = db_query($zapytanie) or Die ("Nie działa zapytanie końcowe");
$a=0;
$aile=0;
while ($row = db_fetch($final)) 
{



$u_login[]=$row['user_login'];
$u_loginn[]=namen($row['user_login']);
$u_wiek[]=get_user_wiek($row['user_y']);
$u_img[]=$row['user_fotka'];
$u_id[]=$row['user_id'];
$u_woj[]=get_user_woj($row['user_woj']);
$u_miasto[]=$row['user_miasto'];
$u_plec[]=get_user_plec($row['user_plec']);
$u_plecnr[]=$row['user_plec'];
$u_online[]=get_user_online($row['user_id']);
$u_imie[]=$row['user_imie'];
$u_nazwisko[]=$row['user_nazwisko'];
$aile++;

}

}
$smarty->assign("ko_foto",$ko_foto);
$smarty->assign("ko_data",$ko_data);
$smarty->assign("ko_ocena",$ko_ocena);
$smarty->assign("u_imie",$u_imie);
$smarty->assign("u_nazwisko",$u_nazwisko);
$smarty->assign("u_login",$u_login);
$smarty->assign("u_loginn",$u_loginn);
$smarty->assign("u_wiek",$u_wiek);
$smarty->assign("u_img",$u_img);
$smarty->assign("u_id",$u_id);
$smarty->assign("u_woj",$u_woj);
$smarty->assign("u_miasto",$u_miasto);
$smarty->assign("u_plec",$u_plec);
$smarty->assign("u_plecnr",$u_plecnr);
$smarty->assign("u_online",$u_online);

$smarty->assign("podstron",$podstron);
$smarty->assign("strona",$strona);
$smarty->assign("a",$a);
$smarty->assign("aile",$aile);
$smarty->assign("nrip","1");

$smarty->assign("stan",$_GET['stan']);
$smarty->assign("title",$lang['465'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/panel-ko.tpl');

?>
