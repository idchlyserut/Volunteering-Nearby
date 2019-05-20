<?php

$databaseHost = 'localhost';
$databaseName = 'webprog';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 // Check connection
	if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
 
?>
