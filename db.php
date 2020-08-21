<?php

DEFINE("DB_HOST","localhost");
DEFINE("DB_USERNAME","root");
DEFINE("DB_PASSWORD",""); // qwerty
DEFINE("DB_NAME","operator");

try{
	$db_handle = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME."",DB_USERNAME,DB_PASSWORD);
}
catch(PDOException $error){
	echo $error->getMessage();
}
?>