<html>
<head>
<title>
Forget Password
</title>    
    <link href="forget.css" rel="stylesheet">    
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
    <h1>Forgot Password</h1>
    <form method="post" action="dbconnection2.php">
     <p>Enter Registered Mail ID</p>
        
    <input type="text"  name="email" placeholder="Enter Registered mail"  required>
     <br>
      <input type="submit" name="forget" value="Submit">
    </form>
    </div>
    </section>      
        </body>
</html>