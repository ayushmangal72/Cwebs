<?php 
include('config.php');
if(isset($_POST['submit'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $rest=$_REQUEST['names'];
    $resadd=$_REQUEST['address'];
   $num=rand(12322, 121212);
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif","webp");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into restaurant(name,res_id,image,res_address) values('".$rest."','".$num."','".$name."','".$resadd."')";
     mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="names" placeholder="Enter name">
        Select image to upload:
        <input type="file" name="file"/>
        Address
        <input type="text" name="address" placeholder="Enter Address"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</body>
</html>