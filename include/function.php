<?php 
include("function_all.php");
function user_ip() 
{

		if (getenv('HTTP_CLIENT_IP')) {
			$ip = getenv('HTTP_CLIENT_IP');
		}
		elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$ip = getenv('HTTP_X_FORWARDED_FOR');
		}
		elseif (getenv('HTTP_X_FORWARDED')) {
			$ip = getenv('HTTP_X_FORWARDED');
		}
		elseif (getenv('HTTP_FORWARDED_FOR')) {
			$ip = getenv('HTTP_FORWARDED_FOR');
		}
		elseif (getenv('HTTP_FORWARDED')) {
			$ip = getenv('HTTP_FORWARDED');
		}
		else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
}
function get_you($film){

	if(preg_match("/youtu.be/",$film))
	{
		preg_match_all("/youtu.be\/(.*)/",$film,$ke);

		$key=$ke[1][0];
	}
	else
	{
		parse_str( parse_url($film, PHP_URL_QUERY ), $my_array_of_vars );
		$key=$my_array_of_vars['v'];
	}

	return $key;
	
}

function user_online(){

   global $visitors_online;
   return $visitors_online->count_users();

}

function user_login_online(){
                global $pre;
   global $visitors_online;
   $count = db_num_rows ( db_query("SELECT user_id FROM ".$pre."useronline WHERE user_id>=1"));
   return $count;
}

function get_user_foto($id)
{
   global $pre;
   $Query_flu='SELECT user_login,user_id,user_fotka,user_plec FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($id).'"'; 
   $result_flu = db_query($Query_flu) or die(db_error());
   while ($row_flu = db_fetch($result_flu)) 
   {
      if($row_flu['user_fotka']!=""){$do="upload/zdjecia/".$row_flu['user_fotka'];}else if($row_flu['user_fotka']=="" and $row_flu['user_plec']=="1"){$do="images/women.jpg";}else{$do="images/men.jpg";}
       
      return $do;
   }
}
function get_dane($id,$lang)
{
   global $pre;
   $Query_flu='SELECT * FROM '.$pre.'dane WHERE d_id="'.db_real_escape_string($id).'"'; 
   $result_flu = db_query($Query_flu) or die(db_error());
   while ($row_flu = db_fetch($result_flu)) 
   {
		if($lang=="en" and $row_flu['d_eng']<>"")
		{

			return $row_flu['d_eng'];

		}else
		{
			return $row_flu['d_nazwa'];
		}
      
   }
}
function get_user_grupy($kto)
{
   global $pre;
   $count = db_num_rows ( db_query("SELECT * FROM ".$pre."czlonkowie WHERE c_user=$kto and c_akt='1'"));
   if($count>=1){return $count;}else{return 0;}
}


function get_user_online($id)
{
                global $pre;
   global $visitors_online;
   $count = db_num_rows ( db_query("SELECT user_id FROM ".$pre."useronline WHERE user_id='".$id."' GROUP BY ip"));
   if($count>=1){return $count;}else{return 0;}
}

function get_user_ile($kto)
{
   global $pre;
   if($kto==1){$q="user_plec='1' and user_akt='1'";}else if($kto==2){$q="user_plec='2' and user_akt='1'";}else{$q="user_akt='1'";}
   $count = db_num_rows ( db_query("SELECT user_id,user_plec,user_plec FROM ".$pre."user WHERE ".$q.""));
   if($count>=1){return $count;}else{return 0;}
}

function get_user_galeria($kto)
{
   global $pre;
   $count = db_num_rows ( db_query("SELECT fo_user FROM ".$pre."foto WHERE fo_user=$kto"));
   if($count>=1){return $count;}else{return 0;}
}

function get_user_filmy($kto)
{
   global $pre;
   $count = db_num_rows ( db_query("SELECT fo_user FROM ".$pre."mov WHERE fo_user=$kto"));
   if($count>=1){return $count;}else{return 0;}
}

function get_user_prezenty($kto)
{
   global $pre;
   $count = db_num_rows ( db_query("SELECT ge_do FROM ".$pre."give WHERE ge_do=$kto"));
   if($count>=1){return $count;}else{return 0;}
}

function get_user_imprezy($kto)
{
   global $pre;
   $count = db_num_rows ( db_query("SELECT i_user FROM ".$pre."imprezy WHERE i_user=$kto"));
   if($count>=1){return $count;}else{return 0;}
}

function get_user_znajomi($kto)
{
   
   global $pre;
   $count = db_num_rows ( db_query("SELECT fo_akt,fo_do,fo_od FROM ".$pre."friend WHERE fo_akt=1 and (fo_od=$kto or fo_do=$kto)"));
   if($count>=1){return $count;}else{return 0;}
}

function get_user_wiek($wiek)
{
   if($wiek>=1){return (date("Y")-$wiek);}else{return " ";}
}

function get_user_plec($plec)
{
   if($plec==1){return "Kobieta";}else if($plec==2){return"Mężczyzna";}else{return"";}
}

function get_user_woj($id)
{
   global $pre;
   $Query_flu='SELECT * FROM '.$pre.'woj WHERE w_id="'.db_real_escape_string($id).'"'; 
   $result_flu = db_query($Query_flu) or die(db_error());
   while ($row_flu = db_fetch($result_flu)) 
   {
      return $row_flu['w_nazwa'];
   }
}

function get_user_firend($od,$do)
{
   global $pre;
   $count = db_num_rows ( db_query("SELECT fo_od,fo_do,fo_akt FROM ".$pre."friend WHERE ((fo_od='".$od."' and fo_do='".$do."') OR (fo_do='".$od."' and fo_od='".$do."')) and fo_akt=1"));
   return $count;
}

function get_login_user($id)
{
   global $pre;
   $Query_flu='SELECT user_login,user_id FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($id).'"'; 
   $result_flu = db_query($Query_flu) or die(db_error());
   while ($row_flu = db_fetch($result_flu)) 
   {
      return $row_flu['user_login'];
   }
}

function get_user_p($id)
{
   global $pre;
   $Query_flu='SELECT user_plec,user_id FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($id).'"'; 
   $result_flu = db_query($Query_flu) or die(db_error());
   while ($row_flu = db_fetch($result_flu)) 
   {
      return $row_flu['user_plec'];
   }
}

function get_user_imie($id)
{
   global $pre;
   $Query_fli='SELECT user_imie,user_id FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($id).'"'; 
   $result_fli = db_query($Query_fli) or die(db_error());
   while ($row_fli = db_fetch($result_fli)) 
   {
      return $row_fli['user_imie'];
   }
}
function get_user_nazwisko($id)
{
   global $pre;
   $Query_fln='SELECT user_nazwisko,user_id FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($id).'"'; 
   $result_fln = db_query($Query_fln) or die(db_error());
   while ($row_fln = db_fetch($result_fln)) 
   {
      return $row_fln['user_nazwisko'];
   }
}
function  spremail($email) 
{
  if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 	
  { 
  return false;
  } 
  else
  {
  return true;
  }
}

function emot($txt)
{
 
$txt = str_replace(':)', "<span class='emo_j'></span>", $txt);
$txt = str_replace(';)', "<span class='emo_d'></span>", $txt);
$txt = str_replace(':(', "<span class='emo_t'></span>", $txt);
$txt = str_replace(':o', "<span class='emo_c'></span>", $txt);
$txt = str_replace(';p', "<span class='emo_p'></span>", $txt);
$txt = str_replace(':P', "<span class='emo_p'></span>", $txt);
$txt = str_replace(':pa', "<span class='emo_s'></span>", $txt);
$txt = str_replace(':hej', "<span class='emo_si'></span>", $txt);
$txt = str_replace(':*', "<span class='emo_o'></span>", $txt);
$txt = str_replace(':ok', "<span class='emo_9'></span>", $txt);
$txt = str_replace(':@', "<span class='emo_10'></span>", $txt);
$txt = str_replace(';d', "<span class='emo_12'></span>", $txt);
$txt = str_replace('b)', "<span class='emo_13'></span>", $txt);
$txt = str_replace(':wnerw', "<span class='emo_14'></span>", $txt);
$txt = str_replace(':zly', "<span class='emo_15'></span>", $txt);

return $txt;
}

?>