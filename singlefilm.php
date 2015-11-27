<?php 
include("subheader.php");

$zapytanie = "SELECT * FROM ".$pre."mov LEFt JOIN ".$pre."user ON user_id=fo_user where fo_id = ".(int)$_GET['id'];

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
$smarty->assign("row",$rows[0]);
$smarty->assign("title",'Filmy - '.$ust['nazwa']);


$zapytanie_access = "SELECT * FROM ".$pre."mov_access where mov_id = ".(int)$_GET['id']." and user_id = ".$_SESSION['user_id'];

$query_access = db_query($zapytanie_access);
if($query_access&&$query_access->num_rows>0){
    $smarty->assign("hasAccess",true);
}
else{
    $smarty->assign("hasAccess",false);
}

$smarty->assign('logged',isset($_SESSION['user_id']));
$smarty->display($ust['templates'].'/singlefilm.tpl');

?>
