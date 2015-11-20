<?php 
session_start();
include('db_connect.php');
include('include/function.php');
include('include/ust.php');


$id = $ust['dotpay'];              # numer ID zarejestrowanego klienta

if($_GET['p']==1)
{
   $code = "".$ust['pk1']."";
}
if($_GET['p']==2)
{
   $code = "".$ust['pk2']."";
}
if($_GET['p']==2)
{
   $code = "".$ust['pk2']."";
}

$type = "sms,c1";         # typ konta: C1 - 8 znakowy kod bezobsługowy
		       		 # typ konta: sms dla sprawdzania SMSow
$page = "main.php";    # strona ktora ma sie otworzyc po podaniu poprawnego kodu
#
# gdy sprawdzane będą zarówno konta smsowe jak i konta przy płatnościach kartą
# to należy wtedy użyć zapisu:
# $type = "c1,sms";
#
#
# przy sprawdzaniu kilku kont o różnych identyfikatorach należy użyć zapisu:
# $code = "abcd1,abcd2,kody2,kody6"; 
# $check = "xxxxxxxx"; # podany kod na stronie gdzie wejście jest płatne i wymagany jest zakupiony kod
$check = $_POST['check'];# podany kod na stronie gdzie wejście jest płatne i wymagany jest zakupiony kod

$del=0;                # jezeli kod ma byc jednorazowy to ustaw wartosc na 1;


#############################################################################################################################
if($check == NULL)
            header("Location: doladuj-konto/stan:3");
  
       $array = array();
       $array['code'] = $code;
       $array['check']= $check;
       $array['id']   = $id;
       $array['type'] = $type;
       $array['del']  = $del;
       $ch = curl_init ();
       curl_setopt ($ch, CURLOPT_URL, "https://ssl.dotpay.pl/check_code.php");
       curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
       curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 2);
       curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
       curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt ($ch, CURLOPT_TIMEOUT, 100);
       curl_setopt ($ch, CURLOPT_POST, 1);
       curl_setopt ($ch, CURLOPT_POSTFIELDS, $array);
      $recv = curl_exec ($ch);
      curl_close ($ch);

      $dane = explode("\n", $recv);
    $status = $dane[0];
    $czas_zycia = $dane[1];

    if ($status == 0) 
    {
            header("Location: doladuj-konto/stan:2");
            exit();
    }  # gdy kod niepoprawny
    else 
    {  # gdy kod poprawny:
	if (!isset($_COOKIE['ActiveCode']))
	{
	    setcookie('ActiveCode',1, time()+$czas_zycia);
	}
	else 
	{ 
	    setcookie('ActiveCode',0, time()+2, "/");
	    setcookie('ActiveCode',1, time()+$czas_zycia, "/");
	}

        if($_GET['p']==1)
        {
            $up="UPDATE ".$pre."user SET user_money-user_money+".$ust['pi1']." WHERE user_id='".$_SESSION['user_id']."'";
            db_query($up);
            $in="INSERT INTO ".$pre."zamowienia(`za_pakiet`,`za_user`,`za_data`,`za_kod`)VALUES('1','".$_SESSION['user_id']."',NOW(),$check)";
            db_query($in);
            header("Location: doladuj-konto/stan:1");
            exit();
        }
        if($_GET['p']==2)
        {
            $up="UPDATE ".$pre."user SET user_money-user_money+".$ust['pi2']." WHERE user_id='".$_SESSION['user_id']."'";
            db_query($up);
            $in="INSERT INTO ".$pre."zamowienia(`za_pakiet`,`za_user`,`za_data`,`za_kod`)VALUES('2','".$_SESSION['user_id']."',NOW(),$check)";
            db_query($in);
            header("Location: doladuj-konto/stan:1");
            exit();
        }
        if($_GET['p']==3)
        {
            $up="UPDATE ".$pre."user SET user_money-user_money+".$ust['pi3']." WHERE user_id='".$_SESSION['user_id']."'";
            db_query($up);
            $in="INSERT INTO ".$pre."zamowienia(`za_pakiet`,`za_user`,`za_data`,`za_kod`)VALUES('3','".$_SESSION['user_id']."',NOW(),$check)";
            db_query($in);
            header("Location: doladuj-konto/stan:1");
            exit();
        } 
    
    }
?>