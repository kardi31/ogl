<?php
session_start();
/* Database Configuration. Add your details below */
header('Content-Type: text/html; charset=utf-8');
$dbOptions = array(
	'db_host' => 'localhost',
	'db_user' => 'darecki2_r',
	'db_pass' => 'A47VspUW',
	'db_name' => 'darecki2_r'
);

/* Database Config End */


error_reporting(E_ALL ^ E_NOTICE);

require "classes/DB.class.php";
require "classes/Chat.class.php";
require "classes/ChatBase.class.php";
require "classes/ChatLine.class.php";
require "classes/ChatUser.class.php";
include("../include/function.php");
session_name('webchat');
session_start();

if(get_magic_quotes_gpc()){
	
	// If magic quotes is enabled, strip the extra slashes
	array_walk_recursive($_GET,create_function('&$v,$k','$v = stripslashes($v);'));
	array_walk_recursive($_POST,create_function('&$v,$k','$v = stripslashes($v);'));
}

try{
	
	// Connecting to the database
	DB::init($dbOptions);
	
	$response = array();
	
	// Handling the supported actions:
	
	switch($_GET['action']){
		
		case 'login':
			$response = Chat::login($_POST['name'],$_POST['email'],$_POST['user']);
		break;
		
		case 'checkLogged':
			$response = Chat::checkLogged();
		break;
		
		case 'logout':
			$response = Chat::logout();
		break;
		
		case 'submitChat':
			$response = Chat::submitChat($_POST['chatText'],$_POST['room'],$_POST['room_od']);
		break;
		
		case 'getUsers':
			$response = Chat::getUsers();
		break;
		
		case 'getChats':
			$response = Chat::getChats($_GET['lastID'],$_GET['room'],$_GET['room_od']);
		break;
		
		default:
			throw new Exception('Error');
	}
	if($_GET['action']=="getChats")
	{
		echo emot(json_encode($response));
	}
	else
	{
		echo json_encode($response);
	}
}
catch(Exception $e){
	die(json_encode(array('error' => $e->getMessage())));
}

?>