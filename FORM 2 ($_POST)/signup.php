<?php
print_r($_POST);
echo "<br>";
if($_POST){
    echo "Form submitted successfully";
    echo $_POST['username']; 
}
?>