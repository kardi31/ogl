<?php 
include("subheader.php");



$zapytanie = "SELECT * FROM ".$pre."mov INNER JOIN ".$pre."mov_access ON fo_id=mov_id WHERE user_id = ".(int)$_SESSION['user_id']." ORDER by fo_id DESC";

if(!$strona){
$nr=$_GET["strona"];
if($nr==0)
{
$nr=1;
}

$strona=$nr;
}


$ile=100;

$start=($strona-1)*$ile;     

$wykonaj = db_query($zapytanie) or Die("Nie działa zapytanie". $zapytanie);
$ile_rek = db_num_rows($wykonaj);

$podstron = ceil($ile_rek/$ile);

$zapytanie.= " LIMIT $start,$ile";    

$final = db_query($zapytanie) or Die ("Nie działa zapytanie końcowe");
$i=1;

$rows = array();
$key = 0;
while ($row = db_fetch($final)) 
{
    $rows[$key] = $row;
    $rows[$key]['user_loginn'] = namen($row['user_login']);
    
    
    if($row['fo_custom_file']==1){
        $rows[$key]['fo_fm']=$row['fo_fm'];
    }
    else{
        $rows[$key]['fo_fm']=get_you($row['fo_fm']);
    }
    
    $key++;
}
$smarty->assign("rows",$rows);
$smarty->assign("title",'Moje kupione filmy - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/filmy.tpl');

?>
