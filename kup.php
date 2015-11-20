<?php 
include("subheader.php");

if($_GET['id']>=1)
{


$Query='SELECT * FROM '.$pre.'dni WHERE dni_id="'.db_real_escape_string($_GET['id']).'" ORDER by dni_dni ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $p_dni=$row['dni_dni'];
   $p_pkt=$row['dni_pkt'];
   $p_cpkt=$row['dni_cpkt'];
   $p_dniid=$row['dni_id'];
   $p_dnicena=$row['dni_cena'];
   $p_dnicenasms=$row['dni_cenasms'];
   $p_dninumer=$row['dni_numer'];
   $p_dnikod=$row['dni_kod'];
   $p_dnitresc=$row['dni_tresc'];
   $p_dnismspkt=$row['dni_sms_pkt'];
   $p_dnipaykod=$row['dni_pay_kod'];
   $p_dnipaypkt=$row['dni_pay_pkt'];
}


if($_GET['typ']=="pkt")
{

	$Querys='SELECT * FROM '.$pre.'user WHERE user_id='.$_SESSION['user_id'].''; 
	$results = db_query($Querys) or die(db_error());
	while ($rows = db_fetch($results)) 
	{           
		$smarty->assign("um",$rows['user_money']);
		$ium=$rows['user_money'];
		$user_end=$rows['user_vip'];
	}

	if($ium>=$p_cpkt)
	{   
		$smarty->assign("ium","ok"); 
	}
	else
	{
		$smarty->assign("ium","o"); 
	}

	if($_GET['v']=="kup" and $ium>=$p_cpkt)
	{
	    $smarty->assign("stan_pay","2"); 
		$t=$p_dni*24*60*60;
		
			if($user_end>=time())
			{
				$prom=$user_end+$t;
			}
			else
			{
				$prom=time()+$t;
			}
			
		$in="INSERT INTO ".$pre."zamowienia(`za_pakiet`,`za_user`,`za_data`,`za_cena`,`za_punkty`,`za_op`)VALUES('cpkt','".$_SESSION['user_id']."',NOW(),'','".$p_dniid."','1')";
		db_query($in);       
        $up="UPDATE ".$pre."user SET user_vip='".$prom."',user_money=user_money-".$p_cpkt." WHERE user_id=".db_real_escape_string($_SESSION['user_id'])."";           
        db_query($up);
	}
	if($_GET['v']=="kup" and $ium<$p_cpkt)
	{
		$smarty->assign("bum","1");
	}

}


if(isset($_POST['kod']))
{

	$get_sms=array();
	$get_sms['id']=$ust['dotpay_sms'];    
	$get_sms['code']=$p_dnikod;     
	$get_sms['typ']="sms";		       			       	
	$get_sms['kod']=$_POST['kod']; 
	 
							
	$check = $_POST['kod'];
	$del=0;           

	if($check == NULL)
	{
			   $smarty->assign("stan_pay","1"); 
	}
	else
	{
  
		include("include/pay_get_sms.php");
		
		if($get_sms['status']=="ok") 
		{
			$Querys='SELECT * FROM '.$pre.'user WHERE user_id='.$_SESSION['user_id'].''; 
			$results = db_query($Querys) or die(db_error());
			while ($rows = db_fetch($results)) 
			{           

				$user_end=$rows['user_vip'];
			}
	        $smarty->assign("stan_pay","2"); 
			$t=$p_dni*24*60*60;
			if($user_end>=time())
			{
				$prom=$user_end+$t;
			}
			else
			{
				$prom=time()+$t;
			}
			
			$in="INSERT INTO ".$pre."zamowienia(`za_pakiet`,`za_user`,`za_data`,`za_cena`,`za_punkty`,`za_op`)VALUES('sms','".$_SESSION['user_id']."',NOW(),'".$p_dnicenasms."','".$p_dniid."','1')";
			db_query($in);         
            $up="UPDATE ".$pre."user SET user_vip='".$prom."',user_money=user_money+".$p_pkt." WHERE user_id=".db_real_escape_string($_SESSION['user_id'])."";           
            db_query($up);   
		}
		else
		{
			$smarty->assign("stan_pay","1"); 
		}
    
	}
}



}
else
{



$Query='SELECT * FROM '.$pre.'dni ORDER by dni_dni ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
   $p_dni[]=$row['dni_dni'];
   $p_pkt[]=$row['dni_pkt'];
   $p_cpkt[]=$row['dni_cpkt'];
   $p_dniid[]=$row['dni_id'];
   $p_dnicena[]=$row['dni_cena'];
   $p_dnicenasms[]=$row['dni_cenasms'];
   $p_dninumer[]=$row['dni_numer'];
   $p_dnikod[]=$row['dni_kod'];
   $p_dnitresc[]=$row['dni_tresc'];
   $p_dnismspkt[]=$row['dni_sms_pkt'];
   $p_dnipaykod[]=$row['dni_pay_kod'];
   $p_dnipaypkt[]=$row['dni_pay_pkt'];
}

}
$smarty->assign("dnidni",$p_dni);
$smarty->assign("dnipkt",$p_pkt);
$smarty->assign("dnicpkt",$p_cpkt);
$smarty->assign("dniid",$p_dniid);
$smarty->assign("dnicena",$p_dnicena);
$smarty->assign("dnicenasms",$p_dnicenasms);
$smarty->assign("dninumer",$p_dninumer);
$smarty->assign("dnikod",$p_dnikod);
$smarty->assign("dnitresc",$p_dnitresc);
$smarty->assign("dnismspkt",$p_dnismspkt);
$smarty->assign("dnipaypkt",$p_dnipaypkt);
$smarty->assign("dnipaykod",$p_dnipaykod);




$smarty->assign("get_id",htmlspecialchars($_GET['id']));
$smarty->assign("get_typ",htmlspecialchars($_GET['typ']));



$smarty->assign("cenapkt",$ust['cenapkt']);
$smarty->assign("typ_p",$ust['typ_p']);

$smarty->assign("stan",$_GET['stan']);

$smarty->assign("title",$lang['457'].' - '.$ust['nazwa']);
$smarty->display($ust['templates'].'/kup.tpl');

?>
