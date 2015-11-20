<?php 
include("subheader.php");

if($_GET['del']>=1)
{
  $del="DELETE FROM ".$pre."faq WHERE faq_id=".db_real_escape_string($_GET['del'])." and faq_user=".$_SESSION['user_id']."";
  db_query($del);
  $smarty->assign("delc","1");
}

if($_POST['zd'])
{
	if($user_ile_money>=$ust['oglp'])
	{
		if($_POST['nazwa']<>"" and $_POST['opis']<>"")
		{
			$up="UPDATE ".$pre."user SET user_money=user_money-".$ust['oglp']." WHERE user_id='".db_real_escape_string($_SESSION['user_id'])."'";  
			db_query($up);
			
			$in = "INSERT INTO ".$pre."faq(faq_nazwa, faq_tresc,faq_data,faq_user,faq_dateadded)VALUES('".$_POST['nazwa']."', '".$_POST['opis']."','".time()."','".$_SESSION['user_id']."','".date('Y-m-d H:i:s')."')";

                        db_query($in);
			
			$smarty->assign("addogl","1");
		}
		else
		{
			$smarty->assign("uppol","1");
			$smarty->assign("p_nazwa",htmlspecialchars($_POST['nazwa']));
			$smarty->assign("p_opis",htmlspecialchars($_POST['opis']));
		}
		
		
	}
	else
	{
		$smarty->assign("zmpkt","1");
	}
}

if($_GET['promo'])
{
    
	if($user_ile_money>=$ust['ust_ogloszenie_promo'])
	{
            // sprawdz czy ogloszenie bylo juz wypromowane dzisiaj
            // aby uniknac pobierania punktow za odswiezenie strony
    
            $checkIfPromoTodayQuery="select * from ".$pre."faq WHERE faq_id=".(int)$_GET['promo']." and faq_featured = 1 and faq_dateadded like '".date('Y-m-d')."%'"; 
            
            if(db_query($checkIfPromoTodayQuery)->num_rows==0){
                $up="UPDATE ".$pre."user SET user_money=user_money-".$ust['oglp']." WHERE user_id='".db_real_escape_string($_SESSION['user_id'])."'";  
                db_query($up);

                $promoQuery="UPDATE ".$pre."faq SET faq_featured=1, faq_dateadded = '".date('Y-m-d H:i:s')."' WHERE faq_id=".(int)$_GET['promo'];  

                db_query($promoQuery);
                $smarty->assign("promoogl","1");
            }
	}
	else
	{
            $smarty->assign("zmpkt","1");
	}
}

$Query='SELECT * FROM '.$pre.'faq WHERE faq_user="'.db_real_escape_string($_SESSION['user_id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$faq_id[]=$row['faq_id'];
$faq_nazwa[]=$row['faq_nazwa'];
$faq_opis[]=$row['faq_tresc'];
$faq_data[]=date("d-m-Y",$row['faq_data']);

}

$smarty->assign("faq_id",$faq_id);
$smarty->assign("faq_nazwa",$faq_nazwa);
$smarty->assign("faq_opis",$faq_opis);
$smarty->assign("faq_data",$faq_data);

$smarty->assign('ust_ogloszenie_promo',$ust['ust_ogloszenie_promo']);
$smarty->assign("stan",$_GET['stan']);
$smarty->assign("title",'Moje ogłoszenia - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/panel-ogl.tpl');

?>
