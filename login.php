<?php include('config.php');?>
<html>
<head>
<title>
Login Page
</title>    
<link href="logincss.css" rel="stylesheet">    
      
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="image/swiggu.jpg">
</head> 
<body>  
   
<header>
       <div class="main">
        <div class="row">
            <div class="logo">
     <a href="front.php"> <img src="image/swiggy-1.png"></a>
      </div>
   
    <ul class="row1">
      <li> <i class="fa fa-home"></i><a href="index.php"> Home</a>  </li>
          <li> <i class="fa fa-car"></i><a href="login.php">Profile</a>  </li>
          <li> <i class="fa fa-question"></i><a href=""> Help</a>  </li>
          <li> <i class="fa fa-user-plus"></i><a href="signup.php">SignUp</a>  </li>
      </ul>
        </div>
    </div>
    </header>   
    
    
    
    
<section>    
    <div class="loginbox">
    <img src="image/img_avatar2.png" class="avatar">
    <h1>Login Here</h1>
    <form method="post" action="dbconnection.php">
     <p>Username</p>
    <input type="text"  name="username" placeholder="Enter Username"  required>
     <p>Password</p>
    <input type="password" name="password" placeholder="Enter Password" required>
    <br>
      <input type="submit" name="Login" value="Login">
        <a href="forget.php"> Lost your password?</a>
        <br>
        <a href="signup.php"> Don't have a account? Click here to Sign up</a>
    </form>
    </div></section>      
        </body>
</html>