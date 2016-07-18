<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$FILE METHOD</title>
</head>
<body>
    
    
    <form action="fileMethod.php" method="post" enctype="multipart/form-data" align="centre">
    
    <label> Upload Image <input type="file"  name="image"> </label><br><br>
    <input type="submit" name="upload" value="Upload">
    
    </form>
    
</body>
</html>


<?php
     if(isset($_POST['upload'])){
         
         echo "<br> File Name :";
         echo $image_name=$_FILES['image']['name'];
         echo "<br> File Type :";
         echo $image_type=$_FILES['image']['type'];
         echo "<br> File size :";
         echo $image_size=$_FILES['image']['size'];
         echo "<br> File Tmp_name :";
         echo $image_tmp=$_FILES['image']['tmp_name'];
         
         
         
     }

?>