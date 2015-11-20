<?php 
include("subheader.php");
if($_GET['v']=="znajomi")
{
	include("profil-znajomi.php");
}
else if($_GET['v']=="zdjecia")
{
	include("profil-zdjecia.php");
}
else if($_GET['v']=="filmy")
{
   include("profil-filmy.php");
}
else if($_GET['v']=="imprezy")
{
	include("profil-imprezy.php");
}
else if($_GET['v']=="prezenty")
{
	include("profil-prezenty.php");
}
else
{


if($_POST['addkom'])
{

$kod=1;

$nick=$_SESSION['user_nick'];


if($_POST['tresc']!="")
{
	$in="INSERT INTO ".$pre."komentarze(`kom_nick`, `kom_tresc`, `kom_data`, `kom_typ`, `kom_idk`, `kom_idu`) VALUES ('".htmlspecialchars($nick)."', '".htmlspecialchars($_POST['tresc'])."', NOW(), 'g', '".htmlspecialchars($_GET['id'])."', '".$_SESSION['user_id']."')";
	db_query($in);

	$up="UPDATE ".$pre."user SET user_ilek=user_ile+1 WHETE user_id='".db_real_escape_string($_GET['id'])."'";
	db_query($up);
}
else
{

  $tresc=htmlspecialchars($_POST['tresc']);

  if($nick)
  {
     $smarty->assign("e_n","1");
     $smarty->assign("e_t",$nick);
  }
  else
  {
     $smarty->assign("e_n","0");
     $smarty->assign("e_t",$nick);
  }
  if($_POST['tresc']=="")
  {
     $smarty->assign("t_n","1");
     $smarty->assign("t_t",$tresc);
  }
  else
  {
     $smarty->assign("t_n","0");
     $smarty->assign("t_t",$tresc);
  }
  if($kod==1)
  {
     $smarty->assign("k_n","0");
  }
  else
  {
     $smarty->assign("k_n","1");
  }
}

}

$kom_ile=0;
$Query='SELECT * FROM '.$pre.'komentarze WHERE kom_idk="'.db_real_escape_string($_GET['id']).'" AND kom_typ="g" ORDER by kom_id DESC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

	$kom_data[]=$row['kom_data'];
	$kom_nick[]=$row['kom_nick'];
	$kom_nickn[]=namen($row['kom_nick']);
	$kom_tresc[]=$row['kom_tresc'];
	$kom_idu[]=$row['kom_idu'];
	$kom_foto[]=get_user_foto($row['kom_idu']);
	$kom_ile++;
}

if(($ust['ukv']>=1) and ($_GET['id']<>$_SESSION['user_id']) and ($_SESSION['user_id']>=1) and ($_COOKIE['view_'.$_GET['id'].'']==""))
{

	$in="INSERT INTO `".$pre."kv`(`kv_kto`,`kv_kogo`,`kv_data`) VALUES ('".$_SESSION['user_id']."','".$_GET['id']."',NOW())";
	db_query($in);

	setcookie("view_".$_GET['id']."",$_GET['id'] , time()+86400, "/");  

}

$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
	$login=$row['user_login'];
	$smarty->assign("login",$row['user_login']);
	$smarty->assign("loginn",namen($row['user_login']));
	$smarty->assign("id",$row['user_id']);
	$smarty->assign("datao",$row['user_data_o']);
	$smarty->assign("wiek",get_user_wiek($row['user_y']));
	$smarty->assign("d",$row['user_d']);
	$smarty->assign("m",$row['user_m']);
	$smarty->assign("y",$row['user_y']);
	$smarty->assign("profil_vip",$row['user_vip']);
	$smarty->assign("profil_plec",get_user_plec($row['user_plec']));
	$smarty->assign("user_plec",$row['user_plec']);
	$smarty->assign("profil_wzrost",$row['user_wzrost']);
	$smarty->assign("profil_kolor_oczu",$row['user_kolor_oczu']);
	$smarty->assign("profil_kolor_wlosu",$row['user_kolor_wlosu']);
	$smarty->assign("profil_budowa_ciala",get_dane($row['user_budowa_ciala'],$u_usr['lang'],$row['user_plec']));
	$smarty->assign("profil_pale",$row['user_pale']);
	$smarty->assign("profil_alkochol",$row['user_alkochol']);
	$smarty->assign("profil_miasto",$row['user_miasto']);
	$smarty->assign("profil_wojid",$row['user_woj']);
	$smarty->assign("profil_woj",get_user_woj($row['user_woj']));
	$smarty->assign("profil_dzieci",get_dane($row['user_dzieci'],$u_usr['lang'],$row['user_plec']));
	$smarty->assign("profil_stc",get_dane($row['user_stc'],$u_usr['lang'],$row['user_plec']));
	$smarty->assign("user_img",$row['user_fotka']);
	$smarty->assign("profil_img",$row['user_fotka']);
	$smarty->assign("profil_wyks",get_dane($row['user_wyks'],$u_usr['lang'],$row['user_plec']));
	$smarty->assign("profil_ile_znajomi",get_user_znajomi($row['user_id']));
	$smarty->assign("profil_ile_galeria",get_user_galeria($row['user_id']));
	$smarty->assign("profil_ile_filmy",get_user_filmy($row['user_id']));
	$smarty->assign("profil_ile_imprezy",get_user_imprezy($row['user_id']));
	$smarty->assign("profil_ile_prezenty",get_user_prezenty($row['user_id']));

	$smarty->assign("omnie",nl2br($row['user_omnie']));
	$smarty->assign("img",$row['user_fotka']);
	$smarty->assign("get_user_online",get_user_online($row['user_id']));

	$smarty->assign("profil_szukam",explode("|",$row['user_szukam']));
	$smarty->assign("profil_jestem",explode("|",$row['user_jestem']));

	$smarty->assign("profil_szukam_ile",count(explode("|",$row['user_szukam'])));
	$smarty->assign("profil_jestem_ile",count(explode("|",$row['user_jestem'])));
	$news_id=$row['user_id'];
	$uplec=$row['user_plec'];
}



$Query='SELECT * FROM '.$pre.'dane ORDER by d_nazwa ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
	if($row['d_typ']=="sz")
	{
		if($u_usr['lang']=="en" and $row['d_eng']<>"")
		{

			if($uplec=="2")
			{
				$d_nazwa[]=$row['d_ez'];
			}
			else
			{
				$d_nazwa[]=$row['d_eng'];
			}

		}
		else
		{
			if($uplec=="2")
			{
				$d_nazwa[]=$row['d_nazwa'];
			}
			else
			{
				$d_nazwa[]=$row['d_nazwa'];
			}
		}
	}
	else
	{
		if($u_usr['lang']=="en" and $row['d_eng']<>"")
		{

			if($uplec=="1")
			{
				$d_nazwa[]=$row['d_ez'];
			}
			else
			{
				$d_nazwa[]=$row['d_eng'];
			}

		}
		else
		{
			if($uplec=="1")
			{
				$d_nazwa[]=$row['d_nazwa'];
			}
			else
			{
				$d_nazwa[]=$row['d_nazwa'];
			}
		}
	}
	$d_typ[]=$row['d_typ'];
	$d_id[]=$row['d_id'];
}


$smarty->assign("d_nazwa",$d_nazwa);
$smarty->assign("d_typ",$d_typ);
$smarty->assign("d_id",$d_id);


if(get_user_firend($news_id,$_SESSION['user_id'])>=1 or $news_id==$_SESSION['user_id'])
{
	$smarty->assign("czyzn","1");
}
else
{
	$smarty->assign("czyzn","0");
}

$smarty->assign("id_gal",$news_id);
$smarty->assign("t","g");
$smarty->assign("komentowanie","1");
$smarty->assign("kom_data",$kom_data);
$smarty->assign("kom_nick",$kom_nick);
$smarty->assign("kom_nickn",$kom_nickn);
$smarty->assign("kom_idu",$kom_idu);
$smarty->assign("kom_tresc",$kom_tresc);
$smarty->assign("kom_ile",$kom_ile);
$smarty->assign("kom_foto",$kom_foto);


$smarty->assign("title",$login.' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/profil.tpl');

}

?>
