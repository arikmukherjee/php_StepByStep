<?php
$users = ["John", "Jane", "Doe", "Smith"];
echo count($users);
echo "<br>";
echo is_array($users);

if(is_array($users)){
    echo "Yes, it is an array";
} else {
    echo "No, it is not an array";
}

echo "<br>";
unset($users[0]); // Remove the element of the array
print_r($users);
echo "<br>";
sort($users); // Sort the array in ascending order
print_r($users);
echo "<br>";

$users[] = "Alice"; // Add a new element to the array
print_r($users);
echo "<br>";

$users[0] = "Bob"; // Change the value of the first element of the array
print_r($users);
echo "<br>";

$users2 = array_diff($users, ["Jane", "Doe"]); // Find the difference between two arrays
$users2 = array_merge($users, ["Eve", "Bob"]); // Merge two arrays

array_push($users, "Charlie"); // Add an element to the end of the array
array_pop($users); // Remove the last element of the array

$myData = ["name" => "arik", "age" => 21, "gender" => "male", "city" => "Kolkata", "country" => "India", "email" => "arik@gmail.com", "phone" => "1234567890"];

$keys = array_keys($myData); // Get all the keys of an array
print_r($keys);

echo "<br>";
echo implode(", ", $keys); // Convert an array into a string
echo "<br>";
echo implode($users); // Convert an array into a string
echo "<br>";

$str = "Hello how are you";
print_r(explode(",",$str)); // Convert a string into an array
echo "<br>";

$str = "Hello, how, are, you";
$words = explode(", ", $str);
print_r($words);
echo "<br>";
$words = explode("o", $str);
print_r($words);

echo "<br>";
//merge arrays
$users = ["John", "Jane", "Doe", "Smith"];
$users2 = ["Alice", "Bob", "Charlie", "Eve"];
$allUsers = array_merge($users, $users2);
print_r($allUsers);

echo "<br>";
//remove duplicate elements
$users = ["John", "Jane", "Doe", "Smith", "John", "Jane", "Doe", "Smith"];

$uniqueUsers = array_unique($users);
print_r($uniqueUsers);
?>