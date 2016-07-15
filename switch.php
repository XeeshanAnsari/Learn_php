<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch</title>
</head>
<body>
      
    <form action="switch.php" method="post" > 
     
       <lable>Enter One Charactar <input type="text" name ="character"  ></lable><br>
       
       <input type="submit" name="submit" value="check">     
     
    </form>
</body>
</html>



<?php
   if(isset($_POST['submit'])){
     switch ($_POST['character']) {
         case "a" or "A":
           echo "A For Apple";  
         break;
           case "b" or "B":
           echo "B For Banana";  
         break;
           case "c" or "C":
           echo "C For Cat";  
         break;
           case "d" or "D":
           echo "D For Dimond";  
         break;
           case "e" or "E":
           echo "E For Elephant";  
         break;
           case "f" or "F":
           echo "F For Fish";  
         break;
       
       default:
           echo "Not Found";
         break;
     }
  }

?>