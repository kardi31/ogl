<?php 

if($strona_panel!="ok"){exit();}

$ilepw=db_query("SELECT * FROM ".$pre."pw WHERE pw_do='".$_SESSION['user_id']."' and pw_czyt='0' and pw_typ='1'");
$ilepwa=db_num_rows($ilepw);

$ilezp=db_query("SELECT * FROM ".$pre."friend WHERE fo_do='".$_SESSION['user_id']."' and fo_akt='0'");
$ilezpa=db_num_rows($ilezp);

$smarty->assign("newpw",$ilepwa);
$smarty->assign("newzp",$ilezpa);
$smarty->assign("online_user",user_online());
$smarty->assign("online_login_user",user_login_online());
$smarty->assign("user_ile_zar",get_user_ile(""));
$smarty->assign("user_ile_men",get_user_ile("2"));
$smarty->assign("user_ile_women",get_user_ile("1"));

$Queryd='SELECT * FROM '.$pre.'woj ORDER by w_nazwa ASC'; 
$resultd = db_query($Queryd) or die(db_error());
while ($rowd = db_fetch($resultd)) 
{
$p_wojs[]=$rowd['w_nazwa'];
$p_wojids[]=$rowd['w_id'];
}

$smarty->assign("pwojs",$p_wojs);
$smarty->assign("pwojids",$p_wojids);
$ou_id=array();
$ouab=0;
$Querys='SELECT * FROM '.$pre.'friend f LEFT JOIN '.$pre.'useronline o ON f.fo_od=o.user_id or f.fo_do=o.user_id WHERE (f.fo_od="'.db_real_escape_string($_SESSION['user_id']).'" or f.fo_do="'.db_real_escape_string($_SESSION['user_id']).'") and f.fo_akt="1" LIMIT 15'; 
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

	while ($rowe = db_fetch($final)) 
	{

		if(!in_array($rowe['user_id'],$ou_id) and $_SESSION['user_id']!=$rowe['user_id'] and get_user_online($rowe['user_id'])>=1)
		{
			$ouab=$ouab+1;
			$ou_login[]=$rowe['user_login'];
			$ou_loginn[]=namen($rowe['user_login']);
			$ou_wiek[]=get_user_wiek($rowe['user_y']);
			$ou_img[]=$rowe['user_fotka'];
			$ou_id[]=$rowe['user_id'];
			$ou_woj[]=get_user_woj($rowe['user_woj']);
			$ou_miasto[]=$rowe['user_miasto'];
			$ou_plec[]=get_user_plec($rowe['user_plec']);
			$ou_plecnr[]=$rowe['user_plec'];
			$ou_online[]="1";
			//$ou_id[]=$rowe['user_id'];
		}
	}
}



$smarty->assign("ou_login",$ou_login);
$smarty->assign("ou_loginn",$ou_loginn);
$smarty->assign("ou_wiek",$ou_wiek);
$smarty->assign("ou_img",$ou_img);
$smarty->assign("ou_id",$ou_id);
$smarty->assign("ou_woj",$ou_woj);
$smarty->assign("ou_miasto",$ou_miasto);
$smarty->assign("ou_plec",$ou_plec);
$smarty->assign("ou_plecnr",$ou_plecnr);
$smarty->assign("ou_online",$ou_online);
$smarty->assign("ouab",$ouab);

$smarty->display($ust['templates'].'/menu.logowanie.tpl');

if($_SESSION['logadm']=="error"){$_SESSION['logadm']="";}
?>