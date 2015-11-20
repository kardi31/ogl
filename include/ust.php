<?php 
$Query='SELECT * FROM '.$pre.'ustawienia WHERE ust_id="1"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
	$ust['oglp']=$row['ust_oglp']; 
	
	$ust['chatp']=$row['ust_chatp']; 	
		
	$ust['fb_id']=$row['ust_fb_id']; 	

	$ust['fb_se']=$row['ust_fb_se']; 	

	$ust['fb_on']=$row['ust_fb_on']; 
	
	$ust['meta_desc']=$row['ust_meta_desc'];

	$ust['meta_key']=$row['ust_meta_key'];

	$ust['meta_title']=$row['ust_meta_title'];

	$ust['pay_dod']=$row['ust_pay_dod'];
	
	$ust['pay_typ']=$row['ust_pay_typ'];

	$ust['pay_typ_sms']=$row['ust_pay_typ_sms'];

	$ust['cookie_on']=$row['ust_cookie_on'];

	$ust['dotpay_sms']=$row['ust_dotpay_sms'];

	$ust['kos']=$row['ust_18'];

	$ust['popr']=$row['ust_popr'];

	$ust['wiek']=$row['ust_wiek'];
	
	$ust['max_file_size']=$row['ust_max_file_size'];

	$ust['lang_d']=$row['ust_lang_d'];

	$ust['lang_on']=$row['ust_lang_on'];

	$ust['typ_p']="1";

	$ust['pin_urlc']=$row['ust_pin_urlc'];
	
	$ust['dotpay_pin']=$row['ust_pin_urlc'];

	$ust['in_txt']=$row['ust_in_txt'];

	$ust['uko']=$row['ust_ko'];

	$ust['ukv']=$row['ust_kv'];

	$ust['ovip']=$row['ust_ovip'];

	$ust['adres']=$row['ust_adres'];

	$ust['cenapkt']=$row['ust_cenapkt'];

	$ust['kvip']=$row['ust_kvip'];

	$ust['pwvip']=$row['ust_pwvip'];

	$ust['pvip']=$row['ust_pvip'];

	$ust['nazwa']=$row['ust_nazwa'];

	$ust['email']=$row['ust_email'];

	$ust['gift']=$row['ust_gift'];

	$ust['give']=$row['ust_give'];

	$ust['cenaf']=$row['ust_cenaf'];

	$ust['ilen']=$row['ust_ilen'];

	$ust['nocena']=$row['ust_nocena'];

	$ust['nkomentowanie']=$row['ust_nkomentarze'];

	$ust['aocena']=$row['ust_aocena'];

	$ust['akomentowanie']=$row['ust_akomentarze'];

	$ust['cache']=$row['ust_cache'];

	$ust['templates']=$row['ust_templates'];

	$ust['fotd']=$row['ust_fd'];

	$ust['fotm']=$row['ust_fm'];

	$ust['fotmj']=$row['ust_fmj'];

	$ust['fotdj']=$row['ust_fdj'];

	$ust['tekst_color']=$row['ust_tc'];

	$ust['tekst_on']=$row['ust_ont'];

	$ust['tekst']=$row['ust_ft'];

	$ust['tekst_size']=$row['ust_st'];

	$ust['tekst_r']=$row['ust_r'];

	$ust['tekst_g']=$row['ust_g'];

	$ust['tekst_b']=$row['ust_b'];

	$ust['token_news']=$row['ust_tn'];

	$ust['token_art']=$row['ust_ta'];

	$ust['token_ga']=$row['ust_tg'];

	$ust['gocena']=$row['ust_og'];

	$ust['gkomentowanie']=$row['ust_kg'];

	$ust['fk']=$row['ust_fk'];

	$ust['kontaktt']=$row['ust_kontakt_dane'];

	$ust['edytor']=$row['ust_edytor'];

	$ust['token_r']=$row['ust_token_r'];

	$ust['rejestracja']=$row['ust_register'];

	$ust['akt_r']=$row['ust_akt_r'];

	$ust['regulamin']=$row['ust_regulamin'];

	$ust['r_top']=$row['ust_rtop'];

	$ust['r_menu']=$row['ust_rmenu'];

	$ust['r_pro']=$row['ust_rpro'];

	$ust['r_fot']=$row['ust_rfot'];

	$ust['r_topu']=$row['ust_rtopu'];

	$ust['r_menuu']=$row['ust_rmenuu'];

	$ust['r_prou']=$row['ust_rprou'];

	$ust['r_fotu']=$row['ust_rfotu'];

	$ust['dotpay']=$row['ust_dotpay'];

	$ust['pk1']=$row['ust_pk1'];

	$ust['pc1']=$row['ust_pc1'];

	$ust['pi1']=$row['ust_pi1'];

	$ust['pk2']=$row['ust_pk2'];

	$ust['pc2']=$row['ust_pc2'];

	$ust['pi2']=$row['ust_pi2'];

	$ust['pk3']=$row['ust_pk3'];

	$ust['pc3']=$row['ust_pc3'];

	$ust['pi3']=$row['ust_pi3'];
	$ust['ust_ogloszenie_promo']=$row['ust_ogloszenie_promo'];
	$ust['ust_background']=$row['ust_background'];
}

if($ust['wiek']>=1)
{
    
}
else
{
	$ust['wiek']="18";
}

$ust['wiek_start']=date("Y")-$ust['wiek'];
$ust['wiek_max']="100";

$ads=str_replace(" ","",$ust['adres']);
$ads = $ads[strlen($ads)-1];

if($ads=="/"){}else{$ust['adres'].="/";}


?>