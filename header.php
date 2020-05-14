<?php session_start();?>
<html>
<body>
    <header>
       <div class="main">
        <div class="logo">
     <a href="front.html"> <img src="image/swiggy-1.png"></a>
      </div>
   
    <ul class="row1">
        <br>
          <li><i class="fa fa-search"></i><a href="">Search</a>  </li>
          <li><i class="fa fa-question"></i><a href="https://www.swiggy.com/support">Help</a>  </li>
        <li><i class="fa fa-signin"></i><a href="C:\Users\manga\Desktop\Website 1\login.html"> 
            <?php echo $_SESSION['firstname']; ?></a></li>
          <li><i class="fa fa-shopping-cart"></i><a href=""> Cart</a>  </li>
      </ul>
        </div>
      </header>
    
      </body>
      </html>