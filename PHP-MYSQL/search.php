<form action="" method="post">
    <input type="text" name="search" placeholder="Enter name for search" />
    <br>
    <button>Search</button>
</form>

<?php
include 'config.php';

if (isset($_POST['search'])) {
    echo $search = $_POST['search'];
    $student = $conn->prepare("select * from students where username like  '%$search%'");
    $student->execute();
    $result = $student->fetchAll();

    echo "<table border='1'>";
    foreach ($result as $student) {

        echo "<tr>
        <td>" . $student['sno'] . "</td>
        <td>" . $student['username'] . "</td>
        <td>" . $student['email'] . "</td>
        </tr>";
    }
    echo "</table>";
}
?>