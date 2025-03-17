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
        <button name="button" value="set">Set Session</button><br><br>
        <button name="button" value="get">Get Session</button><br><br>
        <button name="button" value="delete">Delete Session</button><br><br>
    </form>
</body>
</html>

<?php
    session_start();
    if(isset($_POST['button'])){
        if($_POST['button'] == 'set'){
            $_SESSION['user'] = $_POST['user'];
            echo "Session is set";
        }
        if($_POST['button'] == 'get'){
            echo $_SESSION['user'];
        }
        if($_POST['button'] == 'delete'){
            session_unset();
            echo "Session is deleted";
        }
    }
    //after refresh session , session still exists.
?>