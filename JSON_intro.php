<?php
// 1. JSON stands for JavaScript Object Notation.
// 2. JSON is a lightweight data interchange format.
// 3. JSON is easy for humans to read and write.
// 4. JSON is easy for machines to parse and generate.
// 5. JSON is based on a subset of the JavaScript Programming Language.
// 6. JSON is language independent.
// 7. JSON is most commonly used data interchange format for web applications.
// 8. Exchange data between web application and server.
// 9. It is text based data interchange format for structuring data.

$user = [
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'age' => 30
];
print_r($user);
echo "<br>";
// Convert PHP array to JSON format
$userJson = json_encode($user);
echo $userJson;
echo "<br>";
// Convert JSON format back to PHP array
$data= '{"name":"John Doe","email":"john@example.com","age":30}';
$dataArray = json_decode($data, true);
print_r($dataArray);
?>
