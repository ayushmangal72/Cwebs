<html>
<head>
<title>Food</title>
        <link href = "htmlcss.css" rel="stylesheet" type="text/css" >
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
      <li> <i class="fa fa-search"></i><a href=""> Search</a>  </li>
          <li> <i class="fa fa-car"></i><a href="login.php"> Profile</a>  </li>
          <li> <i class="fa fa-question"></i><a href="#"> Help</a>  </li>
          <li> <i class="fa fa-shopping-cart"></i><a href="#"> Cart</a>  </li>
      </ul>
        </div>
             
        <div class="font">
   <h1>WELCOME TO SWIGGY</h1>
       
   <div class="button">
    <a href="login.php" class="b1"> Log in</a> 
    <a href="signup.php" class="b2"> Create an account</a> 
    </div>   </div>
        </div>
    
    </header>


    
    
    <section class="features">
            <br>
        <h3 class="text-center">Get delicious food</h3>
        <p class="text"><font size="4">Explore curated lists of top restaurants, cafes, pubs, and bars in Aurangabad, based on trends</font></p>
    <div class="container">
        <div class="row">
             <div class="col-md-4">
                 <img src="image/4x_-_No_min_order_x0bxuf.webp">
                 <h4>No Minimum Order</h4>
                 <p class="arrange"> Order in for yourself or for the group, with no restrictions on order value</p>
                </div>
            <div class="col-md-4">
                <img src="image/4x_Live_order_zzotwy.webp">
                <h4>Live Order Tracking</h4>
                 <p class="arrange">Know where your order is at all times, from the restaurant to your doorstep </p>
                </div>
        
            <div class="col-md-4">
                <img src="image/4x_-_Super_fast_delivery_awv7sn.webp">
                <h4>Lightning-Fast Delivery</h4>
                 <p class="arrange">Experience Swiggy's superfast delivery for food delivered fresh & on time </p>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="mobile">
              
        <h3 class="text-center"> Restaurants in your pocket</h3>
        <div class="container">
           <div class="row">
                <div class="col-md-4">
                    <p class=" mobiletext"><font size="4"><b>Order from your favorite restaurants & track <br>on the go, with the all-new Swiggy app.</b></font></p>
                   <div class="pic">
                   <a href="https://play.google.com/store/apps/details?id=in.swiggy.android"> <img src ="image/m3.webp"></a>
                       <a href="https://itunes.apple.com/in/app/swiggy-food-order-delivery/id989540920"><img src ="image/m4.webp"></a>
                   </div>
               </div>
                  <div class="col-md-4">
                      <div class="pic1">
                    <img src ="image/m1.webp">
               </div>
                      </div>
               <div class="col-md-4">
                   <div class="pic2">
                    <img src ="image/m2.webp">
               </div>
                   </div>
               </div>
        </div>
        <div class="back">
    <video class="video"   autoplay width="720" height="360"  controls muted="muted">
    <source src="Swiggy.mp4" type="video/mp4">
            </video></div>
    </section>
    
         <h3 class="text-center"> We are currently in these cities</h3>
    
    <section class="city">
         <ul class="row2">
                <li><a href="front-mumbai.php">Mumbai</a></li>
                <li><a href="front-ahemdabad.php">Ahemdabad</a></li>
                <li><a href="front-banglore.php">Bangalore</a></li>
                <li><a href="front-chandigarh.php">Chandigarh</a></li>
                <li><a href="front-chennai.php">Chennai</a></li>
                <li><a href="front-delhi.php">Delhi</a></li>
                <li><a href="front-gurgaon.php">Gurgaon</a></li>
                <li><a href="">Guwahati</a></li>
                <li><a href="">Hyderabad</a></li>
                <li><a href="">Indore</a></li>
                <li><a href="">Nagpur</a></li>
        </ul>
    </section>
    
    <?php include('footer.php');?>
    </body>
</html>







