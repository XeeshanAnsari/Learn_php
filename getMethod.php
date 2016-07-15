<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST AND GET</title>
</head>
<body>
      
    <form action="getMethod.php" method="get" > 
     
       <lable>User Name <input type="text" name ="name"  ></lable><br>
       <lable>User Email <input type="email" name="email"></lable><br>
       <input type="submit" name="submit" value="Sign up">     
     
    </form>
</body>
</html>



<?php

  if(isset($_GET ['submit'])){
      echo $name = $_GET['name'];
      echo $email = $_GET['email'];
  }

?>