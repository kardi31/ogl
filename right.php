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

$smarty->assign("menu_nazwa_r",$menu_nazwa_r);
$smarty->assign("menu_tresc_r",$menu_tresc_r);
?>