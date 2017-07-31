<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_destroy();
require 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$name=$_POST['name'];
$phone=$_POST['phone'];
$query="select * from users
where email= '$email'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==0)
{
    $ins_query="insert into users (first_name,last_name,email,phone,registration_timestamp) values('$name','S','$email','$phone',current_timestamp)";
    mysqli_query($con,$ins_query);
    if(mysqli_error($con))
    {
        die (mysqli_error($con));
    }
    $id=mysqli_insert_id($con);
    $_SESSION['id']=$id;
    $_SESSION['email']=$email;
    header('location:products.php');
    //echo $_SESSION['email'];
}
else
{
    echo 'Email already exists';
}

?>