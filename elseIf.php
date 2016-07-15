<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>If Else</title>
</head>
<body>
      
    <form action="elseIf.php" method="post" > 
     
       <lable>Enter your age <input type="text" name ="number"  ></lable><br>
       
       <input type="submit" name="submit" value="check how you old">     
     
    </form>
</body>
</html>



<?php
   if(isset($_POST['submit'])){
      if($_POST ['number'] < 15 ){
        echo "<br>you are child";
      }elseif($_POST ['number'] >= 15 and  $_POST ['number'] <= 35) {
          echo "<br>you are young";
      }else{
             echo "<br>you are old";
      }
  }

?>