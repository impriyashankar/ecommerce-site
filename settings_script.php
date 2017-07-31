<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require "includes/common.php";

$old_pwd=$_POST['oldpwd'];
$new_pwd=$_POST['newpwd'];
$new_pwd1=$_POST['newpwd1'];

$email=$_SESSION['email'];

$sel_query="select password from users where email = '$email'";

$result = mysqli_query($con,$sel_query);
$row= mysqli_fetch_array($result);
$newpwd=md5($new_pwd);
if($row['password'] == md5($old_pwd))
{
    if(strlen($new_pwd) == strlen($new_pwd1))
    {
    
    $updt_query="update users set password = '$newpwd' where email = '$email'";
    
    mysqli_query($con,$updt_query);
    
    echo "Your password has been successfully changed!";
    }
    else
    {
        die("Please re-type correct new password!");
    }
}
else
{
    echo "Incorrect password! Please re-enter correct password.";
}


