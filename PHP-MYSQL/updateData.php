<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <form action=" " method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <br>
            <input type="submit" value="Register">
        </form>
    </body>
</html> 

<?php
if(isset($_POST['username']) && $_POST['email']){
    $name = $_POST['username'];
    $email =  $_POST['email'];
    echo $name;
    echo $email;
    include './config.php';
    // Prepare the SQL statement
    $student = $conn->prepare("INSERT INTO `students` (`username`, `email`, `timestamp`) VALUES ('$name', '$email', NOW())");
    $result=$student->execute();
    // Execute the statement
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error".$conn->errorInfo();
    }
}







include 'config.php';
$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents->execute();

$students = $getStudents->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>";
foreach($students as $student) {

    echo "<tr>
        <td>".$student['sno']."</td>
        <td>".$student['username']."</td>
        <td>".$student['email']."</td>
        <td><form method='post'><button name=delete value=".$student['sno'].">Delete</button></form></td>
        <td><a href='update.php?id=".$student['sno']."'>Edit</a></td>
        </tr>";
}
echo "</table>";

// Delete record
if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $students = $conn->prepare("DELETE FROM students WHERE sno = '$id' ");
    if($students->execute()){
        echo "Record".$id."deleted successfully";
    }
    else{
        echo "Error".$conn->errorInfo();
    }
}
?>