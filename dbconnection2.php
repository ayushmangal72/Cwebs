<?php
include('config.php');
session_start();
if(isset($_POST['forget']))
{
               
				$email = $_POST['email'];
            $query="select * from signup1 where email='$email'";
            $query_run = mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                $_SESSION['email']=$email;
                header ('location:newpass.php');
                
            }
            else
            {
                echo "Email not registered with us ..";
            }
            
}
else
    {
        echo "Unknown Error";   
    }
            
?>