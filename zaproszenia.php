<?php 
include("subheader.php");


$ilepw=0;
$Query='SELECT * FROM '.$pre.'friend WHERE fo_do="'.db_real_escape_string($_SESSION['user_id']).'" order by fo_id DESC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$Query1='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($row['fo_od']).'"'; 
$result1 = db_query($Query1) or die(db_error());
while ($row1 = db_fetch($result1)) 
{
$user_login[]=$row1['user_login'];
$user_loginn[]=namen($row1['user_login']);
}


$pw_id[]=$row['fo_id'];

$pw_od[]=$row['fo_od'];
$pw_czyt[]=$row['fo_akt'];
$pw_tresc[]=$row['fo_tresc'];
$pw_data[]=$row['fo_data'];
$ilepw++;
}

$smarty->assign("od_login",$user_login);
$smarty->assign("od_loginn",$user_loginn);
$smarty->assign("pw_id",$pw_id);
$smarty->assign("temat",$pw_temat);
$smarty->assign("od",$pw_od);
$smarty->assign("pw_tresc",$pw_tresc);
$smarty->assign("czyt",$pw_czyt);
$smarty->assign("data",$pw_data);
$smarty->assign("ilepw",$ilepw);
if($_GET['v']=="wyslano"){$smarty->assign("wyslano","ok");}
if($_GET['v']=="delete-zaproszenie"){$smarty->assign("del","ok");}

$smarty->assign("title",$lang['479'].' - '.$ust['nazwa']);
$smarty->display($ust['templates'].'/zaproszenia.tpl');

?>
