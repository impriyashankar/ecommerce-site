


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require "includes/common.php"; ?>
<html>
    <head>
        <title>LifeStyle store</title>
          
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        
    </head>
    <body>
       
            <?php include "includes/header.php";?>
        <div class="panel panel-primary pnl">
            
            <h3>Change Password</h3>
            <div class="panel-body">
            <form method="POST" action="settings_script.php">
                <div class='form-group'>
                <input type='password' class='form-control'placeholder='Old Password' name="oldpwd">
                </div>
                <div class='form-group' >
                <input type='password' class='form-control' placeholder='New Password' name="newpwd">
                </div>
                <div class='form-group' >
                <input type='password' class='form-control' placeholder='Re-Type New Password' name="newpwd1">
                </div>
                
                <button class='btn btn-primary'>Change</button>
                
            </form>
                </div>
           
        </div>

        <?php include "includes/footer.php";?>
            
        
     
    
    
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    </body>
    
</html>