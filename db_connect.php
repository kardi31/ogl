<?php

@error_reporting(E_ALL ^ E_NOTICE);

$db_function_typ="mysqli";

include_once("include/db_function.php");

//Host - login - hasło - nazwa bazy danych
//$db_connect = db_connect("localhost", "darecki2_r", "A47VspUW","darecki2_r",3306);
$db_connect = db_connect("localhost", "root", "","ogloszenia",3306);

//Prefix tabel
$pre="randki_";

//Do zmienej install nalezy podac "ok" gdy skrypt jest zainstalowany
$install="ok";

include_once("include/safe.php");

?>