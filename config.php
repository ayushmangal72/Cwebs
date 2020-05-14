<?php
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $database = 'swiggy';
    $con= mysqli_connect($host,$user,$pass) or die ("Error caught");
    $check=mysqli_select_db($con,$database) or die("Database connection Error"); 
?>