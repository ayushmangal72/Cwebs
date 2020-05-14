<?php
if(isset($_POST['signup']))
{
                $firstname = $_POST['Fname'];
				$lastname = $_POST['Lname'];
				$username = $_POST['username'];
               	$email = $_POST['email'];
                $password = $_POST['password'];
				$password1 =$_POST['password1'];
                $host = 'localhost';
                $user = 'root';
                $pass = '123';
                //$error = mysql_error();
                $database = 'swiggy';
    $con= mysqli_connect($host,$user,$pass) or die ("Error caught");
    $check=mysqli_select_db($con,$database) or die("Database connection Error");   
        if($password == $password1)
        {
            $query="select * from signup1 where username='$username'";
            $query_run = mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                echo "  Username already exixts. Try different username";
            }
            else
            {
                $p1=md5($password);
                $query="insert into signup1 values('','$firstname','$lastname','$email','$username','$p1')";
                $query_run = mysqli_query($con,$query);
                if($query_run)
                {
                    echo "Data successfully inserted";
                   header ('location:restaurants.php');
                }
                else
                {
                    echo "Connection error";
                }
            }
        }
}
else
    {
        echo "Re enter password carefully";   
    }
            
?>