<?php
session_start();
header('location:signup.html');
$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con, 'user');
$name = $_POST['name'];
$email = $_POST['email'];
$password= $_POST['password'];
$s = "SELECT * FROM `user` WHERE `name` = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo  "Username Already Taken!";
    }
    else $reg = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
?>