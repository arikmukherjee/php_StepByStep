<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="btn" value="Call Function">
    </form>
</body>
</html>

<?php
    if(isset($_POST['btn'])){
        myFunction();
    }
    function myFunction(){
        echo "Function Called";
    }
?>
 
 <!-- Output: 
 When you click on the button, it will display the message “Button Clicked”. 
 This is how you can call a PHP function on button click.  -->

