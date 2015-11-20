<?php 
include("subheader.php");

if($_GET['od']!=""){$sz_od=htmlspecialchars($_GET['od']);}else{$sz_od="0";}
if($_GET['do']!=""){$sz_do=htmlspecialchars($_GET['do']);}else{$sz_do="0";}
if($_GET['plec']!=""){$sz_plec=htmlspecialchars($_GET['plec']);}else{$sz_plec="0";}
if($_GET['online']!=""){$sz_online=htmlspecialchars($_GET['online']);}else{$sz_online="0";}
if($_GET['zdjecie']!=""){$sz_img=htmlspecialchars($_GET['zdjecie']);}else{$sz_img="0";}
if($_GET['woj']!=""){$sz_woj=htmlspecialchars($_GET['woj']);}else{$sz_woj="0";}
if($_GET['miasto']!=""){$sz_miasto=htmlspecialchars($_GET['miasto']);}else{$sz_miasto="0";}

$smarty->assign("sz_od",$sz_od);
$smarty->assign("sz_do",$sz_do);
$smarty->assign("sz_plec",$sz_plec);
$smarty->assign("sz_online",$sz_online);
$smarty->assign("sz_img",$sz_img);
$smarty->assign("sz_woj",$sz_woj);
$smarty->assign("sz_miasto",$sz_miasto);

$query="";


if($sz_od!="0" AND $sz_od!=""){ $odw=date(Y)-$sz_od; $query=$query."user_y<=$odw AND";}
if($sz_do!="0" AND $sz_do!=""){ $odww=date(Y)-$sz_do; $query=$query." user_y>=$odww AND";}
if($sz_plec!="0" AND $sz_plec!=""){$query=$query." user_plec=$sz_plec AND";}
if($sz_img!="0" AND $sz_img!=""){$query=$query." CHAR_LENGTH(user_fotka)>0 AND";}
if($sz_woj!="0" AND $sz_woj!=""){$query=$query." user_woj=$sz_woj AND";}
if($sz_miasto!="0" AND $sz_miasto!=""){$query=$query." user_miasto=\"$sz_miasto\" AND";}

$zapytanie ='SELECT * FROM '.$pre.'user WHERE '.$query.' user_akt="1" order by user_id DESC'; 

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
$ileszuk=0;
while ($row = db_fetch($final)) 
{

if(($sz_online==1 and get_user_online($row['user_id'])==1) or $sz_online==0)
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
$ileszuk++;
}

}
$smarty->assign("u_vip",$u_vip);
$smarty->assign("ileszuk",$ileszuk);
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

$smarty->assign("title",$lang['474'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/szukaj.tpl');

?>
