<?php include './connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include './connection.php';
    $id = $_GET['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST ['lastName'];
    $phoneNo = $_POST['phoneNo'];
    $image = (string)$_POST ['image'];

    $ImgName = $_FILES['image']['name'];
    $ImgTemp = $_FILES['image']['tmp_name'];

    $PicName = explode('.',$ImgName);
    $PicExt = end($PicName);
    $PicPath = '../assets/pfp_images/'.time();


    move_uploaded_file($ImgTemp,$PicPath);

    $queryUPDATE= mysqli_query($connect,"UPDATE student SET std_firstName ='$firstName', std_lastName='$lastName',std_phoneNo='$phoneNo', std_image='$PicPath' WHERE std_id='$id'");

if($queryUPDATE)
    {
        $_SESSION['success'] = 'Student Updated Successfully';
        header('location: read_student.php');
        mysqli_close($connect);
    }
}