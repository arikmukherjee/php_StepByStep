<?php
print_r($_POST);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "Name: $name <br> Email: $email";
    $skill = implode(", ", $_POST['skill']);
    echo "<br>Skills: $skill";
}
?>