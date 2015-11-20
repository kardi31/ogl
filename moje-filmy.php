<?php 
include("subheader.php");

if($_GET['v']=="del")
{




     $up="DELETE FROM ".$pre."mov WHERE fo_id='".$_GET['id']."' and fo_user='".$_SESSION['user_id']."'";
     db_query($up);
     header("Location: ".$ust['adres']."user/moje-filmy/7");
     exit();
}
if($_GET['v']=="prv")
{
     $up="UPDATE ".$pre."mov SET fo_prv=1 WHERE fo_id='".$_GET['id']."' and fo_user='".$_SESSION['user_id']."'";
     db_query($up);
     header("Location: ".$ust['adres']."user/moje-filmy/8");
     exit();
}
if($_GET['v']=="all")
{
     $up="UPDATE ".$pre."mov SET fo_prv=0 WHERE fo_id='".$_GET['id']."' and fo_user='".$_SESSION['user_id']."'";
     db_query($up);
     header("Location: ".$ust['adres']."user/moje-filmy/8");
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
        if($ust['cenaf']>=1)
        {
           $up="UPDATE ".$pre."user SET user_money=user_money-".$ust['cenaf']." WHERE user_id='".db_real_escape_string($_SESSION['user_id'])."'";  
           db_query($up);
        }

        $up="INSERT INTO ".$pre."mov(`fo_user`,`fo_fd`,`fo_fm`,`fo_data`,`fo_prv`,`fo_opis`)VALUES('".$_SESSION['user_id']."','".htmlspecialchars($_POST['nazwa'])."','".htmlspecialchars($_POST['film'])."',NOW(),'".htmlspecialchars($_POST['prv'])."','".htmlspecialchars($_POST['opis'])."')";
        db_query($up);
 
        header("Location: ".$ust['adres']."user/moje-filmy/5");
        exit();
     }
     else
     {
        header("Location: ".$ust['adres']."user/moje-filmy/19");
        exit();
     }
}



$Query='SELECT * FROM '.$pre.'mov WHERE fo_user="'.db_real_escape_string($_SESSION['user_id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$fo_id[]=$row['fo_id'];
$fo_fm[]=$row['fo_fd'];
$fo_fd[]=get_you($row['fo_fm']);
$fo_opis[]=$row['fo_opis'];
$fo_prv[]=$row['fo_prv'];

}

$smarty->assign("fo_id",$fo_id);
$smarty->assign("fo_fm",$fo_fm);
$smarty->assign("fo_fd",$fo_fd);
$smarty->assign("fo_opis",$fo_opis);
$smarty->assign("fo_prv",$fo_prv);
$smarty->assign("cenaf",$ust['cenaf']);

$smarty->assign("stan",$_GET['stan']);
$smarty->assign("title",'Panel użytkownika - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/moje-filmy.tpl');

?>
