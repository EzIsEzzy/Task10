<?php

$connect = mysqli_connect('localhost','root','','school');

if(!$connect)
{
    mysqli_connect_errno();
}
$querySELECT = mysqli_query($connect,'SELECT * FROM student');
