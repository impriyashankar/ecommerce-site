<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$host="127.0.0.1";
$user='root';
$password='Nice2Have';
$database='temp_db';

$con=mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_error())
{
echo mysqli_errno($con).mysqli_error($con);
}

 


