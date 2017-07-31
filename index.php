<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
require 'includes/common.php';
if (isset($_SESSION['email']))
{
header('location:products.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Lifestyle store </title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        </head>
    
    <body>
        <?php
        // put your code here
        //include 'header.php';
       include 'includes/header.php';
        include 'includes/footer.php';
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" > </script>
    </body>
</html>
