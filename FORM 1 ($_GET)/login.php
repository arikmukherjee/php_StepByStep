<?php
if ($_GET) {
    echo "I am login.php";
    echo '<br>';
    echo $_GET['username'];
    echo '<br>';
    echo $_GET['userpassword'];
}
 else {
    echo "No data received";
 }
?>
