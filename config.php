<?php
// Basic connection settings
$databaseHost = $_ENV['DB_URL'];
$databaseUsername = $_ENV['DB_USER'];
$databasePassword = $_ENV['DB_PASSWORD'];
$databaseName = 'rolodex';

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>
