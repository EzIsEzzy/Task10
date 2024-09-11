<?php
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
    $PicPath = '../assets/pfp_images/'.time().$PicExt;


    move_uploaded_file($ImgTemp,$PicPath);
    
    $queryAdd=mysqli_query($connect,"INSERT INTO student (std_firstName,std_lastName,std_phoneNo,std_image) VALUES ('$firstName','$lastName','$phoneNo','$PicPath');");

    if($queryAdd)
    {
        $_SESSION['success'] = 'Student Added Successfully';
        header('location: read_student.php');
        mysqli_close($connect);
    }
}