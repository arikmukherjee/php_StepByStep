<?php
//print_r($_FILES['fileUpload']);
if ($_FILES['fileUpload']) {
    $path = $_FILES['fileUpload']['name'];
    echo $path;
    echo "<br>";
    echo $_FILES['fileUpload']['type'];//$_FILES['fileUpload']['type'] is the type of the file uploaded to the server and it will be image/jpeg for jpeg image.
    echo "<br>";
    $uploadPath = "uploads/" . $path;// "uploads/" . $path is the path where the image will be copied
    echo $uploadPath;
    echo "<br>";
    move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadPath);// move uploaded file to the uploads folder
}
?>