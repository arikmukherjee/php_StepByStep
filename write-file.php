<?php
// $fileName = "files/file.txt";
// $content = "This file contains some text.";

// Open the file for writing
//$file = fopen($fileName, "w") or die("Can't open file");

// Write the content to the file
//fwrite($file, $content);

// Close the file
// fclose($file);
// echo "File created successfully";
 // This script creates a new file named "file.txt" and writes the content "This file contains some text." to it.
?>


<!-- *********************************************************************************** -->

<?php
if(isset($_POST['fileName']) && isset($_POST['content'])){
    $fileName = "files/".$_POST['fileName'];
    $content = $_POST['content'];

    // Open the file for writing
    $file = fopen($fileName, "w") or die("Can't open file");

    // Write the content to the file
    fwrite($file, $content);

    // Close the file
    fclose($file);
    echo "File created successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="fileName" placeholder="Enter file name">
        <br>
        <br>
        <textarea name="content" id="">
            Enter content here
        </textarea>
        <br>
        <br>
        <button>Create File</button>
    </form>
</body>
</html>