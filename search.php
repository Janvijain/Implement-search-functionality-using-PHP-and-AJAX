<?php 
include_once 'database.php';
	$query =@$_POST['query'];
	$query=$conn->query("SELECT * FROM `info` WHERE `name` LIKE '%$query%' ");
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$name = $row['name'];
		$id = $row['id'];
		$address = $row['address'];
		echo "<span style='font-style=italic;'>$name $address </span><br>";
	}
 ?>