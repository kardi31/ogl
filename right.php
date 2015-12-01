<?php 

$Query='SELECT * FROM '.$pre.'menu WHERE menu_s="2" and menu_wys="1" ORDER by menu_nr ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
$inc="";
$tresc="";

$menu_nazwa_r[]=$row['menu_nazwa'];
if($row['menu_t']!="")
{
  $inc='<?php include("panele/'.$row[menu_t].'/index.php");?>';

  ob_start();
  eval ('?>' . $inc);
  $tresc = ob_get_clean();

  $menu_tresc_r[]=$tresc;
}
else
{
  $menu_tresc_r[]=$row['menu_tresc'];
}

}


$rightads = array();
$ad_query='SELECT * FROM '.$pre.'ad WHERE position="topright" and date_to>NOW() and active = 1'; 
$ad_result = db_query($ad_query) or die(db_error());
while ($ad_row = db_fetch($ad_result)) 
{
    array_push($rightads,$ad_row);
}


$smarty->assign("rightads",$rightads);
$smarty->assign("menu_nazwa_r",$menu_nazwa_r);
$smarty->assign("menu_tresc_r",$menu_tresc_r);
?>