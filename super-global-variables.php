<?php
/*
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

$GLOBALS['a'] = 'Hello';

function test() {
    echo $GLOBALS['a']; //Hello
}
test();


$a = 10;
print_r($GLOBALS);//Shows all global variables
echo "<br>";
print_r($_SERVER);// displays server information
echo "<br>";
print_r($_REQUEST);// displays request

//$_REQUEST is a combination of $_GET, $_POST, and $_COOKIE
//$_POST is used to send data to the server to process it

?>