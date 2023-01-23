<?php
// Basic connection settings
$databaseHost = $_ENV['DB_URL'];
$databaseUsername = $_ENV['DB_USER'];
$databasePassword = $_ENV['DB_PASSWORD'];
$databaseName = $_ENV['DB_NAME'];
echo "databaseHost:" . $databaseHost . "<br>";
echo "databaseUsername:" . $databaseUsername . "<br>";
echo "databasePassword:" . $databasePassword . "<br>";
echo "databaseName:" . $databaseName . "<br>";
// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>
