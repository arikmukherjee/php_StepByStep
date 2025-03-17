<?php
$path = "files"; //directory name
$files = scandir($path); //scans the directory and returns the list of files
print_r($files); //prints the list of files

//print only files without directories
 echo "<br>";
foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        echo $file . "<br>";
    }
}

//print only files without directories using array_diff() function to avoid . and .. directories
$items = array_diff(scandir($path), array('.', '..')); //array_diff() function compares the values of two arrays and returns the differences
echo "<br>";
foreach ($items as $item) {
    //echo $item . "<br>";
    echo "<a href=./files/$item>$item</a>";

    //download file
    echo " <a href=download.php?file=$item>Download</a>";
    echo "<br>";
    echo "<hr>";
}
?>