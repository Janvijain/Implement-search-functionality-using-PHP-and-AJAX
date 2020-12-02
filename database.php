<?php 
	$serverName ='localhost';
	$serverUsername ='root';
	$serverPassword ='';

	date_default_timezone_set('UTC');
	$currentDate = date('Y-m-d H:i:s');

	try{
		$conn = new PDO("mysql:host=$serverName; dbname=crud",$serverUsername,$serverPassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e){
		echo "connection Failed: ". $e->getMessage();
	}
?>