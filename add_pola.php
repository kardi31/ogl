<?php 
include("db_connect.php");
include("include/function.php");
if(db_query("ALTER TABLE ".$pre."user ADD user_chat text NOT NULL;")) 
{
	echo'<font color="lime"><b>OK</b></font><br>';
}
else
{
	echo'<font color="red"><b>Error</b></font><br>';
}
if(db_query("ALTER TABLE ".$pre."ustawienia ADD ust_oglp text NOT NULL;")) 
{
	echo'<font color="lime"><b>OK</b></font><br>';
}
else
{
	echo'<font color="red"><b>Error</b></font><br>';
}
if(db_query("ALTER TABLE ".$pre."faq ADD faq_user text NOT NULL;")) 
{
	echo'<font color="lime"><b>OK</b></font><br>';
}
else
{
	echo'<font color="red"><b>Error</b></font><br>';
}
if(db_query("ALTER TABLE ".$pre."faq ADD faq_data text NOT NULL;")) 
{
	echo'<font color="lime"><b>OK</b></font><br>';
}
else
{
	echo'<font color="red"><b>Error</b></font><br>';
}
?>