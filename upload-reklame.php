<?php
session_start();
include("db_connect.php");
include("include/ust.php");
$target_dir = "images/ad/";

$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_SESSION['user_id']).'"'; 
$result = db_query($Query) or die(db_error());
$row = db_fetch($result);
$user_moneyp=$row['user_money'];

if(!isset($ust['reklama_'.$_POST['position']])){
    header('Location: /dodaj-reklame?msg2=hacker');
    exit;
}

$positionPrice = $ust['reklama_'.$_POST['position']];
if($user_moneyp<$positionPrice){
    header('Location: /dodaj-reklame?msg2=za+malo+kredytow');
    exit;
}

$adName = htmlspecialchars($_POST['name']);

$target_file = $target_dir . basename($_FILES["plik1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$new_filename = createSlug($adName).".".$imageFileType;
$new_target_file = $target_dir .$new_filename ;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["plik1"]["tmp_name"]);
    if($check !== false) {
        $msg = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $msg = "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
$key = 1;
while(file_exists($new_target_file)) {
//    $msg = "Plik już istnieje";
//    $uploadOk = 0;
    $new_target_file = $target_dir . createSlug($adName).$key.".".$imageFileType;
    $key++;
}
// Check file size
if ($_FILES["plik1"]["size"] > 2097152) {
    $msg = "Za duży plik";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $msg = "Akceptowany format to jpg,png oraz gif.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $msg2 = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["plik1"]["tmp_name"], $new_target_file)) {
        $msg2 = "The file ". basename( $_FILES["plik1"]["name"]). " has been uploaded.";
        $msg = "Reklama została dodana.";
        
        $filename = basename($_FILES["plik1"]["name"]);
        
        $website = htmlspecialchars($_POST['website']);
        if(strpos($website,'http://')!==0){
            $website = "http://".$website;
        }
        
        switch($_POST['position']):
            case 'top':
                $postionName = 'top';
                break;
            case 'right':
                $postionName = 'topright';
                break;
            case 'bottom':
                $postionName = 'bottom'.rand(1,3);
                break;
        endswitch;
        
        $dateTo = date('Y-m-d',strtotime('+1 week'));
        
        
        $up="UPDATE ".$pre."user SET user_money=user_money-".$positionPrice." WHERE user_id='".db_real_escape_string($_SESSION['user_id'])."'";  
        db_query($up);
        
        $up="INSERT INTO ".$pre."ad(name,website,position,date_to,active,file)VALUES("
                . "'".$adName."',"
                . "'".$website."',"
                . "'".$postionName."',"
                . "'".$dateTo." 00:00:00',"
                . "1,"
                . "'".$new_filename."')";
        db_query($up);
        
        
        
    } else {
        $msg2 = "Sorry, there was an error uploading your file.";
    }
}

header("Location: /dodaj-reklame?msg2=".$msg);

 function createSlug($string, $toLower = true, $space = '-') {
		$chars=array(
		chr(195).chr(128) => 'A', chr(195).chr(129) => 'A',
		chr(195).chr(130) => 'A', chr(195).chr(131) => 'A',
		chr(195).chr(132) => 'A', chr(195).chr(133) => 'A',
		chr(195).chr(135) => 'C', chr(195).chr(136) => 'E',
		chr(195).chr(137) => 'E', chr(195).chr(138) => 'E',
		chr(195).chr(139) => 'E', chr(195).chr(140) => 'I',
		chr(195).chr(141) => 'I', chr(195).chr(142) => 'I',
		chr(195).chr(143) => 'I', chr(195).chr(145) => 'N',
		chr(195).chr(146) => 'O', chr(195).chr(147) => 'O',
		chr(195).chr(148) => 'O', chr(195).chr(149) => 'O',
		chr(195).chr(150) => 'O', chr(195).chr(153) => 'U',
		chr(195).chr(154) => 'U', chr(195).chr(155) => 'U',
		chr(195).chr(156) => 'U', chr(195).chr(157) => 'Y',
		chr(195).chr(159) => 's', chr(195).chr(160) => 'a',
		chr(195).chr(161) => 'a', chr(195).chr(162) => 'a',
		chr(195).chr(163) => 'a', chr(195).chr(164) => 'a',
		chr(195).chr(165) => 'a', chr(195).chr(167) => 'c',
		chr(195).chr(168) => 'e', chr(195).chr(169) => 'e',
		chr(195).chr(170) => 'e', chr(195).chr(171) => 'e',
		chr(195).chr(172) => 'i', chr(195).chr(173) => 'i',
		chr(195).chr(174) => 'i', chr(195).chr(175) => 'i',
		chr(195).chr(177) => 'n', chr(195).chr(178) => 'o',
		chr(195).chr(179) => 'o', chr(195).chr(180) => 'o',
		chr(195).chr(181) => 'o', chr(195).chr(182) => 'o',
		chr(195).chr(182) => 'o', chr(195).chr(185) => 'u',
		chr(195).chr(186) => 'u', chr(195).chr(187) => 'u',
		chr(195).chr(188) => 'u', chr(195).chr(189) => 'y',
		chr(195).chr(191) => 'y',
		chr(196).chr(128) => 'A', chr(196).chr(129) => 'a',
		chr(196).chr(130) => 'A', chr(196).chr(131) => 'a',
		chr(196).chr(132) => 'A', chr(196).chr(133) => 'a',
		chr(196).chr(134) => 'C', chr(196).chr(135) => 'c',
		chr(196).chr(136) => 'C', chr(196).chr(137) => 'c',
		chr(196).chr(138) => 'C', chr(196).chr(139) => 'c',
		chr(196).chr(140) => 'C', chr(196).chr(141) => 'c',
		chr(196).chr(142) => 'D', chr(196).chr(143) => 'd',
		chr(196).chr(144) => 'D', chr(196).chr(145) => 'd',
		chr(196).chr(146) => 'E', chr(196).chr(147) => 'e',
		chr(196).chr(148) => 'E', chr(196).chr(149) => 'e',
		chr(196).chr(150) => 'E', chr(196).chr(151) => 'e',
		chr(196).chr(152) => 'E', chr(196).chr(153) => 'e',
		chr(196).chr(154) => 'E', chr(196).chr(155) => 'e',
		chr(196).chr(156) => 'G', chr(196).chr(157) => 'g',
		chr(196).chr(158) => 'G', chr(196).chr(159) => 'g',
		chr(196).chr(160) => 'G', chr(196).chr(161) => 'g',
		chr(196).chr(162) => 'G', chr(196).chr(163) => 'g',
		chr(196).chr(164) => 'H', chr(196).chr(165) => 'h',
		chr(196).chr(166) => 'H', chr(196).chr(167) => 'h',
		chr(196).chr(168) => 'I', chr(196).chr(169) => 'i',
		chr(196).chr(170) => 'I', chr(196).chr(171) => 'i',
		chr(196).chr(172) => 'I', chr(196).chr(173) => 'i',
		chr(196).chr(174) => 'I', chr(196).chr(175) => 'i',
		chr(196).chr(176) => 'I', chr(196).chr(177) => 'i',
		chr(196).chr(178) => 'IJ',chr(196).chr(179) => 'ij',
		chr(196).chr(180) => 'J', chr(196).chr(181) => 'j',
		chr(196).chr(182) => 'K', chr(196).chr(183) => 'k',
		chr(196).chr(184) => 'k', chr(196).chr(185) => 'L',
		chr(196).chr(186) => 'l', chr(196).chr(187) => 'L',
		chr(196).chr(188) => 'l', chr(196).chr(189) => 'L',
		chr(196).chr(190) => 'l', chr(196).chr(191) => 'L',
		chr(197).chr(128) => 'l', chr(197).chr(129) => 'L',
		chr(197).chr(130) => 'l', chr(197).chr(131) => 'N',
		chr(197).chr(132) => 'n', chr(197).chr(133) => 'N',
		chr(197).chr(134) => 'n', chr(197).chr(135) => 'N',
		chr(197).chr(136) => 'n', chr(197).chr(137) => 'N',
		chr(197).chr(138) => 'n', chr(197).chr(139) => 'N',
		chr(197).chr(140) => 'O', chr(197).chr(141) => 'o',
		chr(197).chr(142) => 'O', chr(197).chr(143) => 'o',
		chr(197).chr(144) => 'O', chr(197).chr(145) => 'o',
		chr(197).chr(146) => 'OE',chr(197).chr(147) => 'oe',
		chr(197).chr(148) => 'R', chr(197).chr(149) => 'r',
		chr(197).chr(150) => 'R', chr(197).chr(151) => 'r',
		chr(197).chr(152) => 'R', chr(197).chr(153) => 'r',
		chr(197).chr(154) => 'S', chr(197).chr(155) => 's',
		chr(197).chr(156) => 'S', chr(197).chr(157) => 's',
		chr(197).chr(158) => 'S', chr(197).chr(159) => 's',
		chr(197).chr(160) => 'S', chr(197).chr(161) => 's',
		chr(197).chr(162) => 'T', chr(197).chr(163) => 't',
		chr(197).chr(164) => 'T', chr(197).chr(165) => 't',
		chr(197).chr(166) => 'T', chr(197).chr(167) => 't',
		chr(197).chr(168) => 'U', chr(197).chr(169) => 'u',
		chr(197).chr(170) => 'U', chr(197).chr(171) => 'u',
		chr(197).chr(172) => 'U', chr(197).chr(173) => 'u',
		chr(197).chr(174) => 'U', chr(197).chr(175) => 'u',
		chr(197).chr(176) => 'U', chr(197).chr(177) => 'u',
		chr(197).chr(178) => 'U', chr(197).chr(179) => 'u',
		chr(197).chr(180) => 'W', chr(197).chr(181) => 'w',
		chr(197).chr(182) => 'Y', chr(197).chr(183) => 'y',
		chr(197).chr(184) => 'Y', chr(197).chr(185) => 'Z',
		chr(197).chr(186) => 'z', chr(197).chr(187) => 'Z',
		chr(197).chr(188) => 'z', chr(197).chr(189) => 'Z',
		chr(197).chr(190) => 'z', chr(197).chr(191) => 's',
		chr(226).chr(130).chr(172) => 'E',
		chr(194).chr(163) => '',
			        ' ' => $space
		);
		$string = strtr($string, $chars);
        
        $patterns = array('/[^a-zA-Z0-9-_\.]/', '/(?:[.](?!(doc|pdf|jpg|gif|png|jpeg|mpg|mpeg|avi|mov|mp4|DOC|JPG|GIF|PNG|JPEG|MPG|MPEG|AVI|MOV|MP4)$))/', '/(-){2,}/', '/^(-)+|(-)+$/');
        $replacements = array('-', '', '-', '');
		
        $string = preg_replace($patterns, $replacements, $string);
		if ($toLower) {
			return strtolower($string);
		}
	}

?>