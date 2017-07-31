<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'includes/common.php';
$product_id=$_GET['id'];
$user_id=$_SESSION['email'];
$ins_query="insert into user_products (user_id,product_id,status) values 
        ('$user_id','$product_id','Added to cart')";
mysqli_query($con,$ins_query);
//die(mysqli_error($con));

header('location:products.php');
