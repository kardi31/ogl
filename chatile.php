<?php 
session_start();
include("db_connect.php");
include("include/function.php");

	$Query='SELECT czyt,room FROM  webchat_lines WHERE czyt="0" and room="'.$_SESSION['user_id'].'"'; 
	$result = db_query($Query) or die(db_error());
	while ($row = db_fetch($result)) 
	{
		$il++;
	}
	
	echo $il;

?>