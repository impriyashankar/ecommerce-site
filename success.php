<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require "includes/common.php";

$id_list=$_GET['id'];

$email=$_SESSION['email'];

$query="update user_products
set status ='Confirmed' where user_id = '$email'
        and product_id in ($id_list)";

mysqli_query($con,$query);


echo "Your order is confirmed. Thank you for shopping with us. 
    <a href='products.php'>Click here</a> to purchase any other item.";

