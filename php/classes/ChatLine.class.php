<?php

/* Chat line is used for the chat entries */

class ChatLine extends ChatBase{
	
	protected $text = '', $author = '', $gravatar = '', $room = '', $room_od = '', $czyt = '';
	
	public function save(){
	

		DB::query("
			INSERT INTO webchat_lines (author, gravatar, text, room, room_do, tss, czyt)
			VALUES (
				'".DB::esc($this->author)."',
				'".DB::esc($this->gravatar)."',
				'".DB::esc($this->text)."',
				'".$this->room."',
				'".$this->room_od."',
				'".time()."',
				'".$this->czyt."'
		)");
		
		// Returns the MySQLi object of the DB class
		
		return DB::getMySQLiObject();
	}
}

?>