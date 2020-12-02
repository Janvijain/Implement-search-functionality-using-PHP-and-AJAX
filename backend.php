<?php
	include_once 'database.php';

	$name = strip_tags(@$_POST['name']);
	$address = strip_tags(@$_POST['address']);
	
	 $query=$conn->query("INSERT INTO `info` (`id`, `name`, `address`) VALUES (NULL, '$name', '$address')");

 	if ($query) {
 		header("location:index.php");
 	}  	

?>