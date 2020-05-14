<?php include('config.php'); ?>
<html>
<head>
<title>Menu</title>
<link href = "menu.css"rel="stylesheet" type="text/css" >
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="image/swiggu.jpg">
</head>
<body>
 <?php include('header.php');  
//     $idres =  $_SESSION['id'] ; 
//                    echo $idres;
//    
                    
     $data=mysqli_query($con,"SELECT * FROM restaurant where res_id = '.$_SESSION['id'].'");
                $i=1;
                while($rows=mysqli_fetch_assoc($data)){
?>
    
    <section class="features">
      <div class="row" >
        <img style="width:30%;" src="upload/<?php echo trim($rows['image']);?>"><b></b> 
        <span><?php echo $rows['name'];?></span>  
        <p style="margin-left:-96px;padding-top:4px; " class="a1"><?php echo "<br>".$rows['res_address'];?></p>  
          <?php }?>
       <ul class="row2">
                <li>4.0<br>5000+ Ratings &nbsp;</li>
                <li>37 mins<br>Delivery Time</li>
                <li>₹ 300<br>Cost for two</li>
       </ul>
          <h4 style="margin-top:-140px;margin-left:50px;">OFFERS</h4>
          <p style="margin-top: -100px;margin-left: -83 px;border:1px solid;margin-bottom:90px;padding:7px 17px;">50% off on orders above ₹99 | <br>Use coupon AYUSHIT</p>
      </div>
    </section>
<!--     Menu code starts-->
    <section>
        <br><br>
<!--         <a href="restaurants.php">Click me</a>-->
        <div class="container-fluid">
         <div class="row">
                <?php  $img=mysqli_query($con,"SELECT * FROM item ORDER BY id DESC");
//                $i=1;
                while($rows=mysqli_fetch_assoc($img)){
                ?>
            <div class="col-md-3">
                <div class="foodpic">
                    <a href="#"> 
                            <img src="upload/menu/<?php echo trim($rows['item_image']);?>"></a> 
                            <span class="dd"><?php echo $rows['item_name'];?></span>  
            </div>
             </div>
             <?php }?>
        </div></div></section>
<!--    menu code ends-->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--    <?php sessiondestroy();?>-->
</body>
</html>