<?php
//$fileName = "files/abc.txt";

// Open the file for reading
// $myFile = fopen($fileName, "r") or die("Can't open file");

// Read the contents of the file
//echo fread($myFile, filesize($fileName));

// Output: Hello World!
//fclose($myFile);
?>


<!-- UPLOAD FILE USING THE FORM  -->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" value="Read File">
</form>

<?php
if(isset($_FILES['file'])){
    $fileName = $_FILES['file']['tmp_name'];  // Use 'tmp_name' to access the uploaded file
    $file = fopen($fileName, "r") or die("Can't open file");
    echo fread($file, filesize($fileName));
    fclose($file);
}
?>