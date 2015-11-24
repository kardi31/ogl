<?php 
include("subheader.php");
$smarty->assign("str_in","1");
$smarty->assign("in_txt",$ust['in_txt']);

$ile_nowi=15; //Ile nowych uzytkownikow ma byc wyswietlanych na glownej
$ile_online=15; //Ile online uzytkownikow ma byc wyswietlanych na glownej

//--------------------------------------------------

$zapytanie ='SELECT * FROM '.$pre.'user WHERE user_akt="1" ORDER by user_id DESC'; 

if(!$strona){
$nr=$_GET["strona"];
if($nr==0)
{
$nr=1;
}

$strona=$nr;
}


$ile=$ile_nowi;

$start=($strona-1)*$ile;     

$wykonaj = db_query($zapytanie) or Die("Nie działa zapytanie". $zapytanie);
$ile_rek = db_num_rows($wykonaj);

$podstron = ceil($ile_rek/$ile);

$zapytanie.= " LIMIT $start,$ile";    

$final = db_query($zapytanie) or Die ("Nie działa zapytanie końcowe");
$a=0;
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
$u_vip[]=$row['user_vip'];
}
$smarty->assign("u_vip",$u_vip);
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


$zapytanie ='SELECT * FROM '.$pre.'useronline o LEFT JOIN '.$pre.'user u ON o.user_id=u.user_id WHERE o.user_id>="1" ORDER BY id DESC'; 

if(!$strona){
$nr=$_GET["strona"];
if($nr==0)
{
$nr=1;
}

$strona=$nr;
}


$ile=$ile_online; 

$start=($strona-1)*$ile;    
$wykonaj = db_query($zapytanie) or Die("Nie działa zapytanie". $zapytanie);
$ile_rek = db_num_rows($wykonaj);

$podstron = ceil($ile_rek/$ile);

$zapytanie.= " LIMIT $start,$ile";    

$final = db_query($zapytanie) or Die ("Nie działa zapytanie końcowe");
$bo=0;
while ($row = db_fetch($final)) 
{

$u_logino[]=$row['user_login'];
$u_loginno[]=namen($row['user_login']);
$u_wieko[]=get_user_wiek($row['user_y']);
$u_imgo[]=$row['user_fotka'];
$u_ido[]=$row['user_id'];
$u_wojo[]=get_user_woj($row['user_woj']);
$u_miastoo[]=$row['user_miasto'];
$u_pleco[]=get_user_plec($row['user_plec']);
$u_plecnro[]=$row['user_plec'];
$u_onlineo[]=get_user_online($row['user_id']);
$u_vipo[]=$row['user_vip'];
$bo++;


}
$smarty->assign("u_vipo",$u_vipo);
$smarty->assign("u_logino",$u_logino);
$smarty->assign("u_loginno",$u_loginno);
$smarty->assign("u_wieko",$u_wieko);
$smarty->assign("u_imgo",$u_imgo);
$smarty->assign("u_ido",$u_ido);
$smarty->assign("u_wojo",$u_wojo);
$smarty->assign("u_miastoo",$u_miastoo);
$smarty->assign("u_pleco",$u_pleco);
$smarty->assign("u_plecnro",$u_plecnro);
$smarty->assign("u_onlineo",$u_onlineo);
$smarty->assign("givereg", $ust['give']);
$smarty->assign("tokenr",$ust['token_r']);
$smarty->assign("rejestracja",$ust['rejestracja']);

$smarty->assign("background",$ust['ust_background']);
$smarty->assign("banner_g","1");
$smarty->assign("podstron",$podstron);
$smarty->assign("strona",$strona);
$smarty->assign("a",$a);
$smarty->assign("nrip","1");
$smarty->assign("bo",$bo);
$smarty->assign("nripp","1");
$smarty->assign("t_in","tak");
$smarty->assign("title",$ust['nazwa']);
$smarty->assign("u_404",$_GET['page']);
$smarty->display($ust['templates'].'/index.tpl');

?>
