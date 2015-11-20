<?php 
session_start();
include("db_connect.php");
include("include/ust.php");

if($_GET['t']=="n")
{
//-------------------------------------------------
if($_COOKIE['news_'.$_GET['id'].'']!="")
{
}
else
{


$Query='SELECT * FROM '.$pre.'news ORDER BY news_id="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$ile=$row["news_ileg"];
$ile++;

$glosy=$row["news_glosy"] + $_GET["ocena"];
$ocena=substr($glosy / $ile, 0,3);
$ocena1=$ocena;

}



$query="UPDATE ".$pre."news SET news_ileg='".$ile."', news_glosy='".$glosy."', news_ocena='".$ocena1."' WHERE news_id='".db_real_escape_string($_GET['id'])."'";
db_query($query);




setcookie("news_".$_GET['id']."",$_GET['id'] , time()+86400, "/");   
}
//----------------------------------------------
}

if($_GET['t']=="z")
{
//-------------------------------------------------
if($_COOKIE['fo_'.$_GET['id'].'']!="")
{
}
else
{


$Query='SELECT * FROM '.$pre.'foto ORDER BY fo_id="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$ile=$row["fo_ileg"];
$ile++;

$glosy=$row["fo_glosy"] + $_GET["ocena"];
$ocena=substr($glosy / $ile, 0,3);
$ocena1=$ocena;
$fouser=$row['fo_user'];
}


if($ust['uko']>=1)
{
   $in="INSERT INTO `".$pre."ko`(`ko_user`,`ko_foto`,`ko_ocena`,`ko_t`,`ko_data`,`ko_fuser`) VALUES ('".$_SESSION['user_id']."','".$_GET['id']."','".$_GET['ocena']."','z',NOW(),'".$fouser."')";
   db_query($in);
}

$query="UPDATE ".$pre."foto SET fo_ileg='".$ile."', fo_glosy='".$glosy."', fo_ocena='".$ocena1."' WHERE fo_id='".db_real_escape_string($_GET['id'])."'";
db_query($query);




setcookie("fo_".$_GET['id']."",$_GET['id'] , time()+2678400, "/");   // 2678400 sekund czyli 31 dni. 
}
//----------------------------------------------
}
if($_GET['t']=="y")
{
//-------------------------------------------------
if($_COOKIE['mo_'.$_GET['id'].'']!="")
{
}
else
{


$Query='SELECT * FROM '.$pre.'mov ORDER BY fo_id="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$ile=$row["fo_ileg"];
$ile++;

$glosy=$row["fo_glosy"] + $_GET["ocena"];
$ocena=substr($glosy / $ile, 0,3);
$ocena1=$ocena;
$fouser=$row['fo_user'];
}


if($ust['uko']>=1)
{
   $in="INSERT INTO `".$pre."ko`(`ko_user`,`ko_foto`,`ko_ocena`,`ko_t`,`ko_data`,`ko_fuser`) VALUES ('".$_SESSION['user_id']."','".$_GET['id']."','".$_GET['ocena']."','z',NOW(),'".$fouser."')";
   db_query($in);
}

$query="UPDATE ".$pre."mov SET fo_ileg='".$ile."', fo_glosy='".$glosy."', fo_ocena='".$ocena1."' WHERE fo_id='".db_real_escape_string($_GET['id'])."'";
db_query($query);




setcookie("mo_".$_GET['id']."",$_GET['id'] , time()+2678400, "/");   // 2678400 sekund czyli 31 dni. 
}
//----------------------------------------------
}
if($_GET['t']=="g")
{
//-------------------------------------------------
if($_COOKIE['g_'.$_GET['id'].'']!="")
{
}
else
{


$Query='SELECT * FROM '.$pre.'gallery ORDER BY ga_id="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$ile=$row["ga_ileg"];
$ile++;

$glosy=$row["ga_glosy"] + $_GET["ocena"];
$ocena=substr($glosy / $ile, 0,3);
$ocena1=$ocena;

}



$query="UPDATE ".$pre."gallery SET ga_ileg='".$ile."', ga_glosy='".$glosy."', ga_ocena='".$ocena1."' WHERE ga_id='".db_real_escape_string($_GET['id'])."'";
db_query($query);




setcookie("g_".$_GET['id']."",$_GET['id'] , time()+86400, "/");   
}
//----------------------------------------------
}

header("Location: ".$_SERVER['HTTP_REFERER']."");

?>