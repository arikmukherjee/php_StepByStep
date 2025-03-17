<?php
// var_dump() is used to show datatypes of variables or objects

$empty = null;
//echo $empty;
//echo var_dump($empty); // it will output: NULL

 $integer = 10;

 echo var_dump($integer); // it will output: int(10)

$connection = ftp_connect("127.0.0.1") or die("localhost not connected"); //object(FTP\connection)#1 (0) {}

echo var_dump($connection); // it will output: resource(3) of type (stream)
?>