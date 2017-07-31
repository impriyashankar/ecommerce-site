

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
require 'includes/common.php';
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
       
            <nav class="navbar navbar-inverse navbar-fixed-top" id="nav-i">
                <div class="container">
                    <div class="navbar-header">
                <a href="index.html" class="navbar-brand">Lifestyle Store</a>
                <button class="navbar-toggle" type="button" data-target="#navi" data-toggle="collapse">
                    <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    
                </button>
                    </div>
                <div class="collapse navbar-collapse" id="navi">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>  
                </div>
                </div>
            </nav>
        <div class="panel panel-primary" >
            
            <div class="panel-heading"></div>
            <div class="panel-body pnl"><p class="text-warning">Login to make a purchase</p>
            <form method="POST" action="login_submit.php">
                <div class='form-group'>
                Email:<input type='text' class='form-control' name="email">
                </div>
                <div class='form-group'>
                Password:<input type='password' class='form-control' name="password">
                </div>
                <button class='btn btn-primary'>Submit</button>
                
            </form>
                </div>
            <div class="panel-footer pnl"><p>Don't have an account?Register.</p></div>
        </div>

        <?php 
        include 'includes/footer.php';
        ?>
            
        
     
    
    
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    </body>
    
</html>