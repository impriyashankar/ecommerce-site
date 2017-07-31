<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'includes/common.php';
$id_list=$_GET['id'];

$email=$_SESSION['email'];

$query="delete from user_products
where user_id = '$email'
        and product_id in ('$id_list')";
mysqli_query($con,$query);


header('location:cart.php');