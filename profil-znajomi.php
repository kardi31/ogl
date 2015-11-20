<?php 

$Querys='SELECT * FROM '.$pre.'friend WHERE (fo_od="'.db_real_escape_string($_GET['id']).'" or fo_do="'.db_real_escape_string($_GET['id']).'") and fo_akt="1"'; 
$results = db_query($Querys) or die(db_error());
while ($rows = db_fetch($results)) 
{

$zapytanie ='SELECT * FROM '.$pre.'user WHERE user_akt="1" and (user_id="'.$rows[fo_do].'" or user_id="'.$rows[fo_od].'")'; 


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
while ($row = db_fetch($final)) 
{

if($_GET['id']!=$row['user_id'])
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

}
}

}

$Querys='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_GET['id']).'" and user_akt="1"'; 
$results = db_query($Querys) or die(db_error());
while ($rows = db_fetch($results)) 
{  
   $userlo=$rows['user_login'];
   $smarty->assign("user_lo",$rows['user_login']);
   $smarty->assign("user_lon",namen($rows['user_login']));
   $smarty->assign("user_loid",$rows['user_id']);
}

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
$smarty->assign("nrip","1");

$smarty->assign("stan",$_GET['stan']);

$smarty->assign("title",$lang['470'].' '.$userlo.' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/profil-znajomi.tpl');

?>
