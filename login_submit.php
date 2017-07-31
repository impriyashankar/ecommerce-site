<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'includes/common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);

$pass=$_POST['password'];
$query="select id,email from users
where email= '$email'";
$result=mysqli_query($con, $query);
if(mysqli_num_rows($result) == 0)
{

}
else
{
   
    $row=mysqli_fetch_array($result);
    $_SESSION['id']=$row['id'];
   
    $_SESSION['email']=$row['email'];
    header('location:products.php');
    
}


