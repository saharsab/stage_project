<?php
    //data source name.
    $dsn = 'mysql:host=localhost;dbname=restaurant_website';
	// MySQL username.
	$user = 'root';
	//MySQL password.
	$pass = '';
	// pdo:hoya li katgerer la communication entre database w php 
	//MYSQL_ATTR_INIT_COMMAND: allows you to send a command to the database server immediately after connecting.
	//'SET NAMES utf8':used character encoding standard that supports a wide range of characters from various languages and scripts.
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);
	try
	{
		$con = new PDO($dsn,$user,$pass,$option);
		//Sets the error mode attribute to throw exceptions when errors occur.
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
	}
	catch(PDOException $ex)
	{
		echo "Connection to the database failed. ! ".$ex->getMessage();
		//Terminates the script execution immediately after displaying the error message.
		die();
	}
?>