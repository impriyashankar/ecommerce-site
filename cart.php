


<?php
include 'includes/common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
           
        $email = $_SESSION['email'];
        
        $query = "select * from user_products where user_id = '$email'";
        //die(mysqli_error($con));
        
        $result = mysqli_query($con, $query);
        
        
        
        //$count = mysqli_num_rows($result);
        
        //echo '<p>Your cart is empty</p>';
        if(mysqli_num_rows($result) == 0)
        {
            
        echo '<br><br><br><br><p>Your cart is empty</p>';
        //exit();
        }
        else
        {
           
            
?>
            
                <div class="container" id="pnl2">
            <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                </tr>
                <?php
                $sum=0;
                $id_list='';
                while($row = mysqli_fetch_array($result))
            { 
                echo '<tr>'; ?>
                    <td> <?php echo $row['product_id'] ?> </td>
                    <td><?php echo $row['product_name'] ?> </td>
                    <td><?php echo $row['product_price'] ?> </td>
                    <td> <a href='cart-remove.php?id=<?php echo $row['product_id']?>'>Remove</a></td>
                    <?php 
                    if($sum == 0)
                    {
                    $id_list =$row['product_id'];
                    }
                else {
                    $id_list =$row['product_id'].','.$id_list;
                }
                    $sum=$sum + $row['product_price']; 
                    ?>
                    
                </tr>
           <?php } ?>
                <tr></tr>
                <tr id="last-row">
                    <td></td>
                    <td>Total</td>
                    <td> <?php echo $sum ?> </td>
                    <td><a href='success.php?id=<?php echo $id_list ?>'><button class="btn btn-primary">Confirm Order</button></a></td>
                </tr>
                
            </tbody>
        </table>
            </div></div>
            
            
            <div class="container" id="pnl3">
            <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <th>Item#</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
                <tr></tr>
                <tr id="last-row">
                    <td></td>
                    <td>Total</td>
                    <td>Rs 0</td>
                    <td><a><button class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span></button></a></td>
                </tr>
                
            </tbody>
        </table>
            </div>
            
        </div>
            
        <?php }
        ?>
       <!-- <div class="container" id="pnl2">
            <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                </tr>
                <tr></tr>
                <tr id="last-row">
                    <td></td>
                    <td>Total</td>
                    <td>Rs 0</td>
                    <td><a><button class="btn btn-primary">Confirm Order</button></a></td>
                </tr>
                
            </tbody>
        </table>
            </div></div>
            
            
            <div class="container" id="pnl3">
            <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <th>Item#</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
                <tr></tr>
                <tr id="last-row">
                    <td></td>
                    <td>Total</td>
                    <td>Rs 0</td>
                    <td><a><button class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span></button></a></td>
                </tr>
                
            </tbody>
        </table>
            </div>
            
        </div>-->
        <?php
           include 'includes/footer.php';
           ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    </body>
    
</html>

