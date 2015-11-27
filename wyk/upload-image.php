<?php
session_start();
include("../db_connect.php");
include("../include/ust.php");


if($_SESSION['user_id']>=1)
{


	$img = $_POST['imgBase64'];
        $id = $_POST['id'];
        $uid = $_POST['uid'];
	// requires php5
	define('UPLOAD_DIR', '../upload/filmy/'.$uid.'/');
        
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
        $filename =  uniqid() . '.png';
	$file = UPLOAD_DIR .$filename;
	$success = file_put_contents($file, $data);
        
        $up="UPDATE ".$pre."mov SET fo_thumb='".$filename."' WHERE fo_id='".$id."'";
        db_query($up);
        
        echo json_encode(array('url' => $file));
        
}
?>