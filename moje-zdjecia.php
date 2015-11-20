<?php 
include("subheader.php");

if($_GET['v']=="del")
{
	$Query='SELECT * FROM '.$pre.'foto WHERE fo_user="'.db_real_escape_string($_SESSION['user_id']).'" and fo_id="'.$_GET['id'].'"'; 
	$result = db_query($Query) or die(db_error());
	while ($row = db_fetch($result)) 
	{
		$fo_fm=$row['fo_fm'];
		@unlink("upload/zdjecia/".$row['fo_fm']);
		@unlink("upload/zdjecia/".$row['fo_fd']);
	}

	$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_SESSION['user_id']).'"'; 
	$result = db_query($Query) or die(db_error());
	while ($row = db_fetch($result)) 
	{
		$fo_user=$row['user_fotka'];
	}

	if($fo_user==$fo_fm)
	{
		 $up="UPDATE ".$pre."user SET user_fotka='' WHERE user_id='".$_SESSION['user_id']."'";
		 db_query($up);
	}


     $up="DELETE FROM ".$pre."foto WHERE fo_id='".$_GET['id']."' and fo_user='".$_SESSION['user_id']."'";
     db_query($up);
     header("Location: ".$ust['adres']."user/moje-zdjecia/7");
     exit();
}
if($_GET['v']=="prv")
{
     $up="UPDATE ".$pre."foto SET fo_prv=1 WHERE fo_id='".$_GET['id']."' and fo_user='".$_SESSION['user_id']."'";
     db_query($up);
     header("Location: ".$ust['adres']."user/moje-zdjecia/8");
     exit();
}
if($_GET['v']=="all")
{
     $up="UPDATE ".$pre."foto SET fo_prv=0 WHERE fo_id='".$_GET['id']."' and fo_user='".$_SESSION['user_id']."'";
     db_query($up);
     header("Location: ".$ust['adres']."user/moje-zdjecia/8");
     exit();
}
if($_GET['v']=="g")
{
     $Query='SELECT * FROM '.$pre.'foto WHERE fo_user="'.db_real_escape_string($_SESSION['user_id']).'" AND fo_id="'.db_real_escape_string($_GET['id']).'"'; 
     $result = db_query($Query) or die(db_error());
     while ($row = db_fetch($result)) 
     {
        $fom=$row['fo_fm'];
     }
     $up="UPDATE ".$pre."user SET user_fotka='".$fom."' WHERE user_id='".$_SESSION['user_id']."'";
     db_query($up);
     header("Location: ".$ust['adres']."user/moje-zdjecia/9");
     exit();
}

$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_SESSION['user_id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

	$smarty->assign("user_fotka",$row['user_fotka']);

	$user_moneyp=$row['user_money'];

}

if($_POST['upf'])
{

     if($user_moneyp>=$ust['cenaf'] or $ust['cenaf']==0)
     {

        include("include/fotka.php");
		
        $fotu=@imggda($ust);
		
        $up="INSERT INTO ".$pre."foto(`fo_user`,`fo_fm`,`fo_fd`,`fo_data`,`fo_prv`,`fo_opis`)VALUES('".$_SESSION['user_id']."','m_".$fotu."','d_".$fotu."',NOW(),'".htmlspecialchars($_POST['prv'])."','".htmlspecialchars($_POST['opis'])."')";
        db_query($up);
		
	    if($ust['cenaf']>=1)
        {
           $up="UPDATE ".$pre."user SET user_money=user_money-".$ust['cenaf']." WHERE user_id='".db_real_escape_string($_SESSION['user_id'])."'";  
           db_query($up);
        }
 
        header("Location: ".$ust['adres']."user/moje-zdjecia/5");
        exit();
     }
     else
     {
        header("Location: ".$ust['adres']."user/moje-zdjecia/19");
        exit();
     }
}



	$Query='SELECT * FROM '.$pre.'foto WHERE fo_user="'.db_real_escape_string($_SESSION['user_id']).'"'; 
	$result = db_query($Query) or die(db_error());
	while ($row = db_fetch($result)) 
	{

		$fo_id[]=$row['fo_id'];
		$fo_fm[]=$row['fo_fm'];
		$fo_opis[]=$row['fo_opis'];
		$fo_prv[]=$row['fo_prv'];

	}

$smarty->assign("fo_id",$fo_id);
$smarty->assign("fo_fm",$fo_fm);
$smarty->assign("fo_opis",$fo_opis);
$smarty->assign("fo_prv",$fo_prv);
$smarty->assign("cenaf",$ust['cenaf']);
$smarty->assign("max_file_size",$ust['max_file_size']);
$smarty->assign("stan",$_GET['stan']);
$smarty->assign("title",$lang['459'].' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/moje-zdjecia.tpl');

?>
