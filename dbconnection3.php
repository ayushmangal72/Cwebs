<?php
    if(isset($_POST['Submit']))
    {
                $password = $_POST['password'];
				$repassword = $_POST['repassword'];
                $host = 'localhost';
                $user = 'root';
                $pass = '123';
                $database = 'swiggy';
    $con= mysqli_connect($host,$user,$pass) or die ("Error caught");
    $check=mysqli_select_db($con,$database) or die("Database connection Error");   
        if($password == $repassword)
        {
            $p = md5($password);
            $query="UPDATE SIGNUP1 SET p1 = '".md5($password)."' WHERE EMAIL = '{$_SESSION['email']}'";
            $query_run = mysqli_query($con,$query);
            if($query_run)
                {
                    echo "Password Successfully Updated";
                   header ('location:login.php');
                }
            else
                {
                    echo "Please try again";
                }
        }
        else
        {
                    echo "Please enter same password ..";   
        }
    }
    else
    {
        echo "Unknown Error 1";   
    }
//    session_destroy();

?>