
<!DOCTYPE html>
<html>
    <head>
        <title>LifeStyle Store</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" id="nav-i">
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
                        <?php 
                        if (isset($_SESSION['email']))
                        { ?>
                            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        <?php }
                        else
                        { ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php } ?>
                    
                    </ul>  
                </div>
                </div>
            </div>



        
