<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$FILE METHOD</title>
</head>
<body>
    
    
    <form action="fileShow.php" method="post" enctype="multipart/form-data" align="centre">
    
    <label> Upload Image <input type="file"  name="image"> </label><br><br>
    <input type="submit" name="upload" value="Upload">
    
    </form>
    
</body>
</html>


<?php
     if(isset($_POST['upload'])){
         
          $image_name=$_FILES['image']['name'];
          $image_type=$_FILES['image']['type'];
          $image_size=$_FILES['image']['size'];
          $image_tmp=$_FILES['image']['tmp_name'];
           
          echo "  <b> Your Uploaded Image is Here :</b> </br>";
          echo "<img src='$image_name' alt='Image' >";
           
         
         
     }