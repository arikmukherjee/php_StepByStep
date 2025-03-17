<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'college';

// Create a new connection using MySQLi
//$conn = mysqli_connect($host, $username, $password);
//$conn = new mysqli($host, $username, $password);


// Create a new connection using PDO

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>