<?php 

if($_POST['addkom'])
{

$kod=1;

$nick=$_SESSION['user_nick'];


if($_POST['tresc']!="")
{
  $in="INSERT INTO ".$pre."komentarze(`kom_nick`, `kom_tresc`, `kom_data`, `kom_typ`, `kom_idk`, `kom_idu`) VALUES ('".htmlspecialchars($nick)."', '".htmlspecialchars($_POST['tresc'])."', NOW(), 'y', '".htmlspecialchars($_GET['idf'])."', '".$_SESSION['user_id']."')";
  db_query($in);
}
else
{

  $tresc=htmlspecialchars($_POST['tresc']);

  if($nick)
  {
     $smarty->assign("e_n","1");
     $smarty->assign("e_t",$nick);
  }
  else
  {
     $smarty->assign("e_n","0");
     $smarty->assign("e_t",$nick);
  }
  if($_POST['tresc']=="")
  {
     $smarty->assign("t_n","1");
     $smarty->assign("t_t",$tresc);
  }
  else
  {
     $smarty->assign("t_n","0");
     $smarty->assign("t_t",$tresc);
  }
  if($kod==1)
  {
     $smarty->assign("k_n","0");
  }
  else
  {
     $smarty->assign("k_n","1");
  }
}

}

$kom_ile=0;
$Query='SELECT * FROM '.$pre.'komentarze WHERE kom_idk="'.db_real_escape_string($_GET['idf']).'" AND kom_typ="y" ORDER by kom_id DESC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

  $kom_data[]=$row['kom_data'];
  $kom_nick[]=get_user_imie($row['kom_idu'])." ".get_user_nazwisko($row['kom_idu']);
  $kom_nickn[]=namen($row['kom_nick']);
  $kom_tresc[]=$row['kom_tresc'];
  $kom_idu[]=$row['kom_idu'];

$kom_ile++;
}

$Querys='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_GET['id']).'" and user_akt="1"'; 
$results = db_query($Querys) or die(db_error());
while ($rows = db_fetch($results)) 
{  
   $smarty->assign("pdz",$rows['user_pdz']);
   $userlo=$rows['user_login'];
   $smarty->assign("user_lo",$rows['user_login']);
   $smarty->assign("user_plec",$rows['user_plec']);
   $smarty->assign("user_lon",namen($rows['user_login']));
   $smarty->assign("user_loid",$rows['user_id']);
   $userloid=$rows['user_id'];
$login=$row['user_login'];
$smarty->assign("login",$rows['user_login']);
$smarty->assign("loginn",namen($rows['user_login']));
$smarty->assign("id",$rows['user_id']);

$smarty->assign("profil_plec",get_user_plec($rows['user_plec']));
$smarty->assign("plecnr",$rows['user_plec']);
$smarty->assign("profil_miasto",$rows['user_miasto']);
$smarty->assign("profil_wojid",$rows['user_woj']);
$smarty->assign("profil_woj",get_user_woj($rows['user_woj']));
$smarty->assign("profil_imie",$rows['user_imie']);
$smarty->assign("profil_nazwisko",$rows['user_nazwisko']);
$smarty->assign("user_img",$rows['user_fotka']);
$smarty->assign("profil_img",$rows['user_fotka']);
$smarty->assign("komz",$rows['user_komz']);
$smarty->assign("of",$rows['user_of']);

$smarty->assign("img",$rows['user_fotka']);
$smarty->assign("get_user_online",get_user_online($rows['user_id']));


}

if(get_user_firend($userloid,$_SESSION['user_id'])>=1 or $userloid==$_SESSION['user_id'])
{
   $smarty->assign("czyzn","1");
}
else
{
   $smarty->assign("czyzn","0");
}

$nrf=0;
$Query='SELECT * FROM '.$pre.'mov WHERE fo_user="'.db_real_escape_string($_GET['id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

if($_GET['idf']==$row['fo_id'])
{if(($row['fo_prv']=="1" and $czyzn=="1") or $row['fo_prv']=="0")
{
   $news_id=$row['fo_id'];
   $fopo=$row['fo_fd'];
   $fopoopis=$row['fo_opis']; 
   $ktf=$nrf;
   $ocena=$row['fo_ocena'];
   $ileg=$row['fo_ileg'];
   $fofm=$row['fo_fd'];
   $fofd=get_you($row['fo_fm']);
}
}

$fo_id[]=$row['fo_id'];
$fo_fm[]=$row['fo_fd'];
$fo_fd[]=get_you($row['fo_fm']);
$fo_opis[]=$row['fo_opis'];
$fo_prv[]=$row['fo_prv'];
$nrf++;

}
$smarty->assign("ocena",$ocena);
$smarty->assign("fofd",$fofd);
$smarty->assign("fofm",$fofm);
$smarty->assign("glosy",$ileg);
$smarty->assign("oceniono",$_COOKIE['mo_'.$news_id.'']);

$smarty->assign("poz",$fo_id[($ktf-1)]);
$smarty->assign("naz",$fo_id[($ktf+1)]);

$smarty->assign("id_gal",$news_id);
$smarty->assign("t","y");
$smarty->assign("komentowanie","1");
$smarty->assign("kom_data",$kom_data);
$smarty->assign("kom_nick",$kom_nick);
$smarty->assign("kom_nickn",$kom_nickn);
$smarty->assign("kom_idu",$kom_idu);
$smarty->assign("kom_tresc",$kom_tresc);
$smarty->assign("kom_ile",$kom_ile);

$smarty->assign("fopo",$fopo);
$smarty->assign("fopoopis",$fopoopis);
$smarty->assign("nrip","1");
$smarty->assign("fo_id",$fo_id);
$smarty->assign("fo_fm",$fo_fm);
$smarty->assign("fo_fd",$fo_fd);
$smarty->assign("fo_opis",$fo_opis);
$smarty->assign("fo_prv",$fo_prv);
$smarty->assign("uko",$ust['uko']);

$smarty->assign("stan",$_GET['stan']);
$smarty->assign("title",'Filmiki użytkownika: '.$userlo.' - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/profil-filmy.tpl');

?>
