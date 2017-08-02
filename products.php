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
       
        <?php    
        include "includes/header.php";
        include "includes/check_if_added.php";
            ?>
        <div class="container" id="cont-body">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras,watches and shirts for you. No need to hunt around,we have all in one place.</p>
            </div>
            <div class="row" id="item-coll">
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    
                    <?php
                    if(!isset($_SESSION['email'])){ ?>
                    
                    <a href='login.php'><button class="btn btn-primary">Add to Cart</button></a>
                    <?php 
                    
                    } else 
                    {
                       
                        if(check_if_added_to_cart(1)){ 
                            
                            ?>
                    
                        
                            <a href="#" class="btn btn-block btn-success disabled">Added to Cart</a>
                        <?php 
                        
                        } else { ?>
                            
                        
                        <a href="cart-add.php?id=1"><button class="btn btn-primary">Add to Cart</button></a>
                            
                        <?php }
                    } ?>
                   
                    
                    
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    </div></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    </div></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    </div></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    </div></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    </div></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    </div></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    </div></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    </div></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                </div></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    </div></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="inner-item">
                    <img src="myimages/watch.jpg" class="img-responsive" alt="camera">
                    <div class="img-caption">
                        <p>Model Name</p>
                        <p>Price</p>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    </div></div>
                
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
 */
-->
