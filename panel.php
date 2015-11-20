<?php 
include("subheader.php");

$Query='SELECT * FROM '.$pre.'woj ORDER by w_nazwa ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
	$p_woj[]=$row['w_nazwa'];
	$p_wojid[]=$row['w_id'];
}

$smarty->assign("pwoj",$p_woj);
$smarty->assign("pwojid",$p_wojid);



$Query='SELECT * FROM '.$pre.'szukam WHERE s_user="'.db_real_escape_string($_SESSION['user_id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
	$smarty->assign("s_pr",$row['s_pr']);
	$smarty->assign("s_mi",$row['s_mi']);
	$smarty->assign("s_fl",$row['s_fl']);
	$smarty->assign("s_prz",$row['s_prz']);
	$smarty->assign("s_zn",$row['s_zn']);
	$smarty->assign("s_pni",$row['s_pni']);
	$smarty->assign("s_odr",$row['s_odr']);
}

$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_SESSION['user_id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
	$smarty->assign("plec",$row['user_plec']);
	$smarty->assign("d",$row['user_d']);
	$smarty->assign("m",$row['user_m']);
	$smarty->assign("y",$row['user_y']);
	$smarty->assign("ue",$row['user_ue']);
	$smarty->assign("user_woj",$row['user_woj']);
	$smarty->assign("koczy",$row['user_kolor_oczu']);
	$smarty->assign("kwlos",$row['user_kolor_wlosu']);
	$smarty->assign("miasto",$row['user_miasto']);
	$smarty->assign("stc",$row['user_stc']);
	$smarty->assign("dzieci",$row['user_dzieci']);
	$smarty->assign("jestem",explode("|",$row['user_jestem']));
	$smarty->assign("sylwetka",$row['user_budowa_ciala']);
	$smarty->assign("wyks",$row['user_wyks']);
	$smarty->assign("papierosy",$row['user_pale']);
	$smarty->assign("alkochol",$row['user_alkochol']);
	$smarty->assign("szukam",explode("|",$row['user_szukam']));
	$smarty->assign("wzrost",$row['user_wzrost']);
	$smarty->assign("kwlosy",$row['user']);
	$smarty->assign("omnie",$row['user_omnie']);
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

$smarty->assign("stan",$_GET['stan']);
$smarty->assign("iko","1");
$smarty->assign("jko","1");
$smarty->assign("title",$lang['463'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/panel.tpl');

?>
