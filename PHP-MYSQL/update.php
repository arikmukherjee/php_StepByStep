<?php
include './config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getStudents = $conn->prepare("SELECT * FROM students WHERE sno = '$id'");
    $getStudents->execute();
    $student = $getStudents->fetchAll(PDO::FETCH_ASSOC);
    
    $name = $student[0]['username'];
    $email = $student[0]['email'];

}

?>

<form action="" method="post">
    <input type="text" name="sno" value="<?php echo $id; ?>" />
    <br><br>
    <input type="text" name="username" value="<?php echo $name; ?>" />
    <br><br>
    <input type="text" name="email" value="<?php echo $email; ?>" />
    <br><br>
    <button value="<?php echo $id?>" name="update">Update student data</button>
</form>

<?php

// Example of updating a student data using the prepared statement.

if(isset($_POST['update'])){
    $id = $_POST['sno'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $updateStudent = $conn->prepare("update students set username = '$name' ,
                                                        email ='$email' 
                                                        where sno = '$id' ");
    $updateStudent->execute();

    if($updateStudent->execute()){
        //echo "Record updated successfully";
        header('Location: updateData.php');
    }
    else{
        echo "Update failed".$conn->errorInfo();
    }
}
?>