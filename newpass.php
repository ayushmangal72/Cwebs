<html>
<head>
<title>
New Password    
</title>    
<link href="newpass.css" rel="stylesheet">    
      
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="image/swiggu.jpg">
</head> 
<body>  
   
<header>
        <div class="main">
        <div class="logo">
     <a href="front.php"> <img src="image/swiggy-1.png"></a>
        </div>
    </div>
    </header>   
    
    
    
    
<section>    
    <div class="loginbox">
    <img src="image/img_avatar2.png" class="avatar">
    <h1>Enter new Password</h1>
    <form method="post" action="dbconnection3.php">
     <p>Enter new password</p>
    <input type="password"  name="password" placeholder="Enter Password"  required>
     <p>Re enter password</p>
    <input type="password" name="repassword" placeholder="Re enter Password" required>
    <br>
      <input type="submit" name="Submit" value="Submit"  >
        </form>
    </div></section>      
        </body>
</html>