<?php include './connection.php';

$id = $_GET['id'];
$queryDELETE = mysqli_query($connect,"DELETE FROM student WHERE std_id = $id");

if($queryDELETE)
{
    $_SESSION['success']="Student Deleted Successfully";
    header('location: read_student.php');
    mysqli_close($connect);
}