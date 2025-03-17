<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'college';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully";

$result = $conn->query("show tables")->fetch_all();
echo "<pre>";
print_r($result);
echo "</pre>";

?>