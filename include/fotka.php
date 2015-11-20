<?php 

function gen_kod($f_ile,$f_typ="")
{

	if($f_typ=="s")
	{
		$znaki = array_merge(range('a','z'),  range(0,9)); 
	}
	else
	{
		$znaki = array_merge(range('a','z'), range('A','Z'), range(0,9)); 
	}
	
	$ile=count($znaki);
	
	$ret="";
	
	for($i=1;$i<=$f_ile;$i++)
	{
		$ret=$ret.$znaki[rand(0,($ile-1))];
	}
	
	return $ret;

}

function imggda($ust)
{
	$folder="upload/zdjecia/"; //Adres folderu z fotkami

	$xd=600; //Maksymalna szerokosc duzej fotki

	$s_min = 110; //Szerokosc miniaturki

	$m_jakos=100; //Jakosc miniaturki

	$d_jakos=100; //Jakosc duzej fotki

	$m_przed="m_"; //Przedrostek miniaturek

	$d_przed="d_"; //Przedrostek duzych

	//Kolor tekstu
	$c_r = $ust['tekst_r']; //RED
	$c_g = $ust['tekst_g']; //GREN
	$c_b = $ust['tekst_b']; //BLUE

	$font = "include/font/arial.ttf"; //Czcionka

	$tekst=$ust['tekst']; //Tekst na obrazku

	$txt_size="10"; //Wielkosc napisu

	$txt_on="0"; //Napis naobrazku ON=1 OFF=0

	//---------USTAWIENIA-KONIEC---------

	$plik_tmp = $_FILES['plik1']['tmp_name'];
	$plik_typ = $_FILES['plik1']['type'];
	$plik_nazwa = $_FILES['plik1']['name'];
	$plik_rozmiar = $_FILES['plik1']['size'];
	$pp_ust=$ust['max_file_size']*1024*1024;
	if($pp_ust<=$plik_rozmiar)
	{
		header("Location: ".$ust['adres']."user/moje-zdjecia/21");
		exit();
	}
	if($plik_tmp!="")
	{
		$name2x = gen_kod(15);

		$namenowa = $name2x.".jpg"; //Nowa nazwa z rozszerzeniem 

		if($plik_typ=="image/jpeg" or $plik_typ=="image/gif" or $plik_typ=="image/png")
		{
			if(is_uploaded_file($plik_tmp)) 
			{
				move_uploaded_file($plik_tmp, "".$folder."".$d_przed."".$namenowa."");
				chmod("".$folder."d_".$namenowa."", 0644);
			}
			
			if($plik_typ=="image/jpeg")
			{
				$org = imagecreatefromjpeg("".$folder."".$d_przed."".$namenowa."");
			}
			else if($plik_typ=="image/gif")
			{
				$org = imagecreatefromgif("".$folder."".$d_przed."".$namenowa."");
			}
			else if($plik_typ=="image/png")
			{
				$org = imagecreatefrompng("".$folder."".$d_przed."".$namenowa."");
			}
			
			$s_org = imagesx($org);
			$w_org = imagesy($org);
		
			$min = imagecreatetruecolor($s_min,$s_min);
		
			if($s_org==$w_org)
			{
				$nmin = $org;
				$ms_org = $s_org;
				$mw_org = $w_org;
			}
			else if($w_org>$s_org)
			{
				$orgm = $org;
				$nmin = imagecreatetruecolor($s_org,$s_org);
				imagecopy($nmin, $orgm, 0, 0, 0, 0, $s_org, $s_org);
				$ms_org = imagesx($nmin);
				$mw_org = imagesy($nmin);
			}
			else
			{
				$orgm =$org;
				$nmin = imagecreatetruecolor($w_org,$w_org);
				$d=$s_org-$w_org;
				$d=floor($d/2);

				imagecopy($nmin, $orgm, 0, 0, $d, 0, $w_org, $w_org);
				$ms_org = imagesx($nmin);
				$mw_org = imagesy($nmin);
			}
		
			imagecopyresampled($min, $nmin, 0, 0, 0, 0, $s_min, $s_min, $ms_org, $mw_org);
		
			imagejpeg($min,"".$folder."".$m_przed."".$namenowa."", $m_jakos); 

			if($s_org >= ($xd+1))
			{
			   if(($w_big = floor(($xd * $w_org) / $s_org)) > 648) $w_big = 648;
			   $big = ImageCreateTrueColor($xd, $w_big);
			   imagecopyresampled($big, $org, 0, 0, 0, 0, $xd, $w_big, $s_org, $w_org);

			   if($txt_on==1)
			   {  
				  $txt_kolor = ImageColorAllocate($big, $c_r, $c_g, $c_b);
				  ImageTtfText($big, $txt_size, 0, 10, ($txt_size+10), $txt_kolor, $font, $tekst);
			   }
		  
			   imagejpeg($big,"".$folder."".$d_przed."".$namenowa."", $d_jakos); 
			}
			else
			{
			   if($txt_on==1)
			   { 
				  $txt_kolor = ImageColorAllocate($org, $c_r, $c_g, $c_b);
				  ImageTtfText($org, $txt_size, 0, 10, ($txt_size+10), $txt_kolor, $font, $tekst);
			   }

			   imagejpeg($org,"".$folder."".$d_przed."".$namenowa."", $d_jakos); 
			}

		}
		else
		{
			header("Location: ".$ust['adres']."user/moje-zdjecia/6");
			exit();
		}

		$fotm = $name2x.".jpg";

		return $fotm;
		
	}
}

?>