<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'college';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
}

// Fetch all tables from the database
$result = $conn->query("show tables");
while($row = $result->fetchAll(PDO::FETCH_NUM)){
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
?>