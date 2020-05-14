<?php
session_start();
if(isset($_POST['Login']))
{
               
				$username = $_POST['username'];
               	$password = md5($_POST['password']);
                $host = 'localhost';
                $user = 'root';
                $pass = '123';
                $database = 'swiggy';
    $con= mysqli_connect($host,$user,$pass) or die ("Error caught");
    $check=mysqli_select_db($con,$database) or die("Database connection Error");   
        
            $query="select * from signup1 where username='$username' AND p1='$password'";
            $query_run = mysqli_query($con,$query);
            $arr=mysqli_fetch_array($query_run);
            if(mysqli_num_rows($query_run)>0)
            {
                $_SESSION['firstname']=$arr['firstname'];
                header ('location:restaurants.php');
                
            }
            else
            {
                echo "The phone number you entered cannot be used to sign in.";
            }
            
}
else
    {
        echo "Unknown Error";   
    }     
?>