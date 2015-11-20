<?php 
include("subheader.php");


$zapytanie ='SELECT * FROM '.$pre.'user WHERE user_akt="1" and user_plec="2"'; 

if(!$strona){
$nr=$_GET["strona"];
if($nr==0)
{
$nr=1;
}

$strona=$nr;
}


$ile=35;

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

$smarty->assign("podstron",$podstron);
$smarty->assign("strona",$strona);
$smarty->assign("a",$a);
$smarty->assign("nrip","1");

if($_GET['strona']<=10)
{
   $page_start="0";
}
else if($_GET['strona']>10)
{
   $page_start=$_GET['strona']-10;
}

if($podstron<=15)
{
   $page_end=$podstron;
}
else
{
   $page_end=$_GET['strona']+10;
   
   if($page_end>=$podstron)
   {
      $page_end=$podstron;
   }

}

$smarty->assign("page_m",($strona-1));
$smarty->assign("page_p",($strona+1));
$smarty->assign("page_start",$page_start);
$smarty->assign("page_end",$page_end);

$smarty->assign("title",$lang['458'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/men.tpl');

?>
