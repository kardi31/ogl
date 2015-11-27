<?php
session_start();
include("../db_connect.php");
include("../include/ust.php");
$target_dir = "../images/ad/";
$target_file = $target_dir . basename($_FILES["plik1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
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
if (file_exists($target_file)) {
    $msg = "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["plik1"]["size"] > 500000) {
    $msg = "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $msg = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["plik1"]["tmp_name"], $target_file)) {
        $msg = "The file ". basename( $_FILES["plik1"]["name"]). " has been uploaded.";
        
        $filename = basename($_FILES["plik1"]["name"]);
        
        $website = htmlspecialchars($_POST['website']);
        if(strpos($website,'http://')!==0){
            $website = "http://".$website;
        }
        
        $up="INSERT INTO ".$pre."ad(name,website,position,date_to,status,file)VALUES("
                . "'".htmlspecialchars($_POST['name'])."',"
                . "'".$website."',"
                . "'".htmlspecialchars($_POST['position'])."',"
                . "'".htmlspecialchars($_POST['date_to'])." 00:00:00',"
                . "1,"
                . "'".$filename."')";
        db_query($up);
        
        
        
    } else {
        $msg = "Sorry, there was an error uploading your file.";
    }
}

header("Location: index.php?page=reklama&msg2=".$msg);
?>