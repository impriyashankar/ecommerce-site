<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'includes/common.php';

if(isset($_SESSION['email']))
{
header('location:products.php');
}
?>
<html>
    <head>
        <title>LifeStyle store</title>
          
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        
    </head>
    <body>
        
       
        <?php   
        include 'includes/header.php';
           ?>
        <div class="panel panel-primary pnl">
            
            <h3>SIGN UP</h3>
            <div class="panel-body">
            <form method="POST" action="signup_script.php">
                <div class='form-group'>
                <input name="name" type='text' class='form-control'placeholder='Name' pattern="^[a-zA-Z\s]{1,10}">
                </div>
                <div class='form-group' >
                <input name="email" type='text' class='form-control' placeholder='Email' pattern="^[a-z]{1,10}@[a-z]{1,10}\.[a-z]{2,3}$">
                </div>
                <div class='form-group' >
                <input type='password' class='form-control' placeholder='Password' pattern=".{6,}">
                </div>
                <div class='form-group'>
                <input name="phone" type='tel' class='form-control' placeholder='Contact' pattern="^[0-9]{10}">
                </div>
                <div class='form-group'>
                <input type='text' class='form-control' placeholder='City'>
                </div>
                <div class='form-group'>
                <input type='text' class='form-control' placeholder='Address'>
                </div>
                <button class='btn btn-primary'>Submit</button>
                
            </form>
                </div>
           
        </div>

       <?php   
        include 'includes/footer.php';
           ?>
            
        
     
    
    
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    </body>
    
</html>

<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->

