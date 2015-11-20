<?php

/* The Chat class exploses public static methods, used by ajax.php */

class Chat{
	
	public static function login($name,$email,$user){
		if(!$name || !$user){
			throw new Exception('Wypełnij wszystkie pola.');
		}
		
		$user = new ChatUser(array(
			'name'		=> $name,
			'gravatar'	=> $user
		));
		
		include_once("../db_connect.php");
		include_once("../include/ust.php");

		$Querys='SELECT * FROM '.$pre.'user WHERE user_id='.$_SESSION['user_id'].''; 
		$results = db_query($Querys) or die(db_error());
		while ($rows = db_fetch($results)) 
		{
			$ile_pkt=$rows['user_money'];
			
			if($rows['user_vip']>=time())
			{
				$czy_vp=1;
			}
			
			$user_chat=$rows['user_chat'];
		}
		if($user_chat==1)
		{
			throw new Exception('Masz zablokowany dostęp do czatu.');
		}
		if($czy_vp!=1)
		{
			if($ile_pkt>$ust['chatp'])
			{
				$up="UPDATE ".$pre."user SET user_money=user_money-".$ust['chatp']." WHERE user_id='".db_real_escape_string($_SESSION['user_id'])."'";  
				db_query($up);
			}
			else
			{
				throw new Exception('Masz zamało punktów by dołączyć do czatu.');
			}
		}
		
		// The save method returns a MySQLi object
		if($user->save()->affected_rows != 1){
			throw new Exception('Nick jest zajęty.');
		}
		
		$_SESSION['user']	= array(
			'name'		=> $name,
			'gravatar'	=>  $user
		);
		
		return array(
			'status'	=> 1,
			'name'		=> $name,
			'gravatar'	=>  $user
		);
	}
	
	public static function checkLogged(){
		$response = array('logged' => false);
			
		if($_SESSION['user']['name']){
			$response['logged'] = true;
			$response['loggedAs'] = array(
				'name'		=> $_SESSION['user']['name'],
				'gravatar'	=> $_SESSION['user']['gravatar']
			);
		}
		
		return $response;
	}
	
	public static function logout(){
		DB::query("DELETE FROM webchat_users WHERE name = '".DB::esc($_SESSION['user']['name'])."'");
		
		$_SESSION['user']=array();

		return array('status' => 1);
	}
	
	public static function submitChat($chatText,$room,$room_od){
		if(!$_SESSION['user']){
			throw new Exception('Nie jesteś zalogowany');
		}
	
		if(!$chatText){
			throw new Exception('You haven\' entered a chat message.');
		}
		$ilejest=DB::query('SELECT COUNT(*) as asd FROM webchat_users WHERE gravatar="'.$room.'"')->fetch_object()->asd;
		if($ilejest>=1 or $room=="0")
		{
			$czyt=1;
		}
		else
		{
			$czyt=0;
		}
		$chat = new ChatLine(array(
			'author'	=> $_SESSION['user']['name'],
			'gravatar'	=> "asd",
			'text'		=> $chatText,
			'room'		=> $room,
			'room_od'	=> $room_od,
			'czyt'      => $czyt
			
		));
	
		// The save method returns a MySQLi object
		$insertID = $chat->save()->insert_id;
	
		return array(
			'status'	=> 1,
			'insertID'	=> $insertID
		);
	}
	
	public static function getUsers(){
		if($_SESSION['user']['name']){
			$user = new ChatUser(array('name' => $_SESSION['user']['name']));
			$user->update();
		}
		
		// Deleting chats older than 5 minutes and users inactive for 30 seconds
		
		//DB::query("DELETE FROM webchat_lines WHERE ts < SUBTIME(NOW(),'0:25:0')");
		DB::query("DELETE FROM webchat_users WHERE last_activity < SUBTIME(NOW(),'0:15:30')");
		
		$result = DB::query('SELECT * FROM webchat_users WHERE gravatar<>"'.$_SESSION['user_id'].'" ORDER BY name ASC LIMIT 18');

		$users = array();
		$us = array();
		while($user = $result->fetch_object()){
			$user->gravatar = $user->gravatar;
			$ilejest=0;
			if($_COOKIE['chat_0']<>"off")
			{
				$ilejest=DB::query('SELECT COUNT(*) as asd FROM webchat_lines WHERE tss>"'.DB::esc($_COOKIE['chat_'.$user->gravatar.'']).'" and room_do="'.$user->gravatar.'" and room="'.$_SESSION['user_id'].'" and czyt="0"')->fetch_object()->asd;
				if($ilejest>=1)
				{
					$user->ile_a='<span class="ilejest" id="user_ile_'.$user->gravatar.'">('.$ilejest.')</span>';
				}
				else
				{
					$user->ile_a='';
				}
			}
			$us[]=$user->gravatar;
			$users[] = $user;
		}
		$ile_u=DB::query('SELECT COUNT(*) as cnt FROM webchat_users')->fetch_object()->cnt;
		if($ile_u>=1){$ile_u=$ile_u-1;}
		
		$result = DB::query('SELECT * FROM webchat_lines WHERE czyt=0 and room="'.$_SESSION['user_id'].'" GROUP by author');


		while($use = $result->fetch_object()){
			if(!in_array($use->room_do,$us))
			{
			$user->gravatar = $use->room_do;
			$user->name = $use->author;
			$ilejest=0;
			if($_COOKIE['chat_0']<>"off")
			{
				$ilejest=DB::query('SELECT COUNT(*) as asd FROM webchat_lines WHERE  room_do="'.$user->gravatar.'" and room="'.$_SESSION['user_id'].'" and czyt="0"')->fetch_object()->asd;
				if($ilejest>=1)
				{
					$user->ile_a='<span class="ilejest" id="user_ile_'.$user->gravatar.'">('.$ilejest.')</span>';
				}
				else
				{
					$user->ile_a='';
				}
			}
			
			$users[] = $user;
			}
		}
		
		return array(
			'users' => $users,
			'ile_a' => $ile_a,
			'total' => $ile_u
		);
	}
	
	public static function getChats($lastID,$room,$room_od){
		$lastID = (int)$lastID;
		if($room=="0"){$qr=' room="0" ';}
		else {$qr=' ((room="'.$room.'" and room_do="'.$room_od.'") or  (room="'.$room_od.'" and room_do="'.$room.'"))';}
		//id > '.$lastID.' and
		$result = DB::query('SELECT * FROM webchat_lines WHERE  '.$qr.' ORDER BY id DESC LIMIT 100');
	
		$chats = array();
		while($chat = $result->fetch_object()){
			
			// Returning the GMT (UTC) time of the chat creation:
			if($chat->czyt=="0" and $chat->room==$_SESSION['user_id'] and $room>=1)
			{
				DB::query('update webchat_lines set czyt="1" WHERE id='.$chat->id.'');
				
			}

			$chat->time = array(
				'hours'		=> gmdate('H',strtotime($chat->ts)),
				'minutes'	=> gmdate('i',strtotime($chat->ts))
			);
			
			$chat->gravatar = "as";
			
			$chats[] = $chat;
		}
		$chats=array_reverse($chats);
		return array('chats' => $chats);
	}
	
	public static function gravatarFromHash($hash, $size=23){
		return '';
	}
}


?>