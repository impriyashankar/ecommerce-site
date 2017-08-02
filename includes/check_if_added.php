<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function check_if_added_to_cart($item_id)
{
require 'includes/common.php';
$user_id= $_SESSION['email'];

//return (isset($_SESSION['email']));



$query="select * from user_products
where user_id='$user_id' and product_id='$item_id' and status='Added to cart'";

$result=mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0)
{
    
    return 1;
}
else 
{
    return 0;
}
}
