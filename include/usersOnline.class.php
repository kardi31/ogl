<?php 

class usersOnline {

	var $timeout = 600;
	var $count = 0;
	var $error;
	var $i = 0;
	
	function usersOnline () {
		$this->timestamp = time();
		$this->ip = $this->ipCheck();
		$this->new_user();
		$this->delete_user();
		$this->count_users();
	}
	
	function ipCheck() {

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
	
	function new_user() {
                global $pre;
                $ip=$this->ip;
		if($_SESSION['user_id']>=1)
		{
                $Query_flu='SELECT ip,id FROM '.$pre.'useronline WHERE user_id="'.$_SESSION['user_id'].'"'; 
		}
		else
		{
                $Query_flu='SELECT ip,id FROM '.$pre.'useronline WHERE ip="'.$ip.'"'; 
		}
                $result_flu = db_query($Query_flu) or die(db_error());
                while ($row_flu = db_fetch($result_flu)) 
                {
                   $del = "DELETE FROM ".$pre."useronline WHERE id=".$row_flu['id'];
                   db_query($del);
                }

		$insert = db_query ("INSERT INTO ".$pre."useronline(timestamp, ip, user_id) VALUES ('$this->timestamp', '$this->ip', '".$_SESSION['user_id']."')");
		if (!$insert) {
			$this->error[$this->i] = "Unable to record new visitor\r\n";			
			$this->i ++;
		}
	}
	
	function delete_user() {
                global $pre;
		$delete = db_query ("DELETE FROM ".$pre."useronline WHERE timestamp < ($this->timestamp - $this->timeout)");
		if (!$delete) {
			$this->error[$this->i] = "Unable to delete visitors";
			$this->i ++;
		}
	}
	
	function count_users() {
                global $pre;
		if (count($this->error) == 0) {
			$count = db_num_rows ( db_query("SELECT DISTINCT ip FROM ".$pre."useronline"));
			return $count;
		}
	}

}

?>