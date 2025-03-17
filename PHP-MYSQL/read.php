<?php
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
        </tr>";
}
echo "</table>";
?>