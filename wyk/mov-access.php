<?php 
//include("subheader.php");


session_start();
include("../db_connect.php");
include("../include/ust.php");
//var_dump($_SESSION);exit;
if($_SESSION['user_id']>=1)
{
    

    $film_id = (int)stripslashes($_POST['id']);
    $user_id = $_SESSION['user_id'];
        
    
    $zapytanie = "SELECT * FROM ".$pre."mov LEFt JOIN ".$pre."user ON user_id=fo_user where fo_id = ".$film_id;
    $rowCena = db_query($zapytanie);
    
    $resultCena = db_fetch($rowCena);
    $cena = $resultCena['fo_cena'];
    
            
    $Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_SESSION['user_id']).'"'; 
    $result = db_query($Query) or die(db_error());
    $row = db_fetch($result);

    $user_moneyp=$row['user_money'];
    
   
    
    if($user_moneyp>=$cena){
        $up="UPDATE ".$pre."user SET user_money=user_money-".$cena." WHERE user_id='".db_real_escape_string($_SESSION['user_id'])."'";  
        db_query($up);
        
        $up="UPDATE ".$pre."user SET user_money=user_money+".$cena." WHERE user_id='".db_real_escape_string($resultCena['fo_user'])."'";  
        db_query($up);
        
        $up="insert into ".$pre."mov_access values (".$user_id.",".$film_id.")";
        db_query($up);
        
        header("Location: /filmy/".$film_id);
        exit();
    }
    else{
        header("Location: /filmy/".$film_id."?msg=Masz+malo+kredytow");
        exit;
    }
   
}


header("Location: /filmy/".$film_id."?msg=Wystapil+nieoczekiwany+blad");
exit;

?>
