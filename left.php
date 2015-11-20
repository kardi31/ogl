<?php 

$Query='SELECT * FROM '.$pre.'menu WHERE menu_s="1" and menu_wys="1" ORDER by menu_nr ASC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$inc="";
$tresc="";

$menu_nazwa_l[]=$row['menu_nazwa'];

if($row['menu_t']!="")
{
  $inc='<?php include("panele/'.$row[menu_t].'/index.php");?>';

  ob_start();
  eval ('?>' . $inc);
  $tresc = ob_get_clean();

  $menu_tresc_l[]=$tresc;
}
else
{
  $menu_tresc_l[]=$row['menu_tresc'];
}

}

$smarty->assign("menu_nazwa_l",$menu_nazwa_l);
$smarty->assign("menu_tresc_l",$menu_tresc_l);
?>