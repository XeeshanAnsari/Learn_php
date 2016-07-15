<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>If Else</title>
</head>
<body>
      
    <form action="if_else.php" method="post" > 
     
       <lable>Enter a Number<input type="text" name ="number"  ></lable><br>
       
       <input type="submit" name="submit" value="check">     
     
    </form>
</body>
</html>



<?php
   if(isset($_POST['submit'])){
      if($_POST ['number'] <= 10 ){
        echo "<br>NUmber is lesser to ten";
      }else{
        echo "<br>NUmber is greater to ten";
      }
  }

?>