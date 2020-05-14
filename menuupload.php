<?php 
include('config.php');
if(isset($_POST['submit'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "upload/menu/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $rest=$_REQUEST['names'];
//  $rescat=$_REQUEST['itemc'];
  $resdes=$_REQUEST['itemdes'];
  $rescost=$_REQUEST['cost'];
   $num=rand(12322, 121212);
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif","webp");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into item(item_name,item_category_id,item_desc,item_image,item_cost
) values('".$rest."','".$num."','".$resdes."','".$name."','".$rescost."')";
     mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.input
{
    padding:2px;
    border-width: thick;
}
</style>    
</head>
    <body>
    <form caction="" method="post" enctype="multipart/form-data">
    <div class="input">
        Item Name<input  type="text" name="names" placeholder="Enter Name"><br><br>
<!--    Item Category<input type="text" name="itemc" placeholder="Enter name"><br><br>-->
        Item Description<input type="text" name="itemdes" placeholder="Enter name"><br><br> 
        Select image to upload:<input type="file" name="file"/><br><br>
        Price<input type="text" name="cost" placeholder="Enter Cost"/><br><br>
        <input type="submit" name="submit" value="UPLOAD"/>
    </div>
    </form>
</body>
</html>