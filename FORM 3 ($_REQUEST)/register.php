<?php
//echo "hi";
//echo $_REQUEST['username'];

// foreach($_REQUEST as $data){
//     echo $data."<br>";  // this will print all the data sent by the form
// }

foreach($_REQUEST as $key => $data){
    echo $key.":".$data."<br>";
    //echo $data."<br>";  // this will print all the data sent by the form
}
?>