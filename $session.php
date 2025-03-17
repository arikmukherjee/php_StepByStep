<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php
session_start(); // Start the session
?>

<!-- store value in session variable(array) -->
<?php
session_start();
$_SESSION["username"] = "JohnDoe";
$_SESSION["email"] = "john@example.com";
echo "Session variables are set.";
?>

<!-- get value from session variable(array) -->
<?php
session_start();
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Email: " . $_SESSION["email"];
?>

<!-- remove session variable(array) -->
<?php
session_start();
unset($_SESSION["username"]); // Removes only 'username' session variable
echo "Username session variable removed.";
?>

<!-- destroy session -->
<?php
session_start();
session_destroy(); // Destroy all session variables
echo "Session destroyed.";
?>
