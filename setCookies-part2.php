<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="user" placeholder="Enter your name"><br><br>
    <button name="button" value="set">Set Cookies</button><br><br>
    <button name="button" value="display">Display Cookies</button><br><br>
    <button name="button" value="delete">Delete Cookies</button><br>
    </form>
</body>
</html>

<?php
    if(isset($_POST['button'])){
        if($_POST['button'] == 'set'){
            $val = $_POST['user'];
            echo $val;
            setcookie('user', $val);
            echo "Cookie set successfully";
        }
        if($_POST['button'] == 'display'){
            echo $_COOKIE['user'];
        }
        if($_POST['button'] == 'delete'){
            setcookie('user', '', time()-3600);
            echo "Cookie deleted successfully";
        }
    }
?>