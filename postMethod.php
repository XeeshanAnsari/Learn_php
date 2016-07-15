<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST Method</title>
</head>
<body>
      
    <form action="postMethod.php" method="post" > 
     
       <lable>User Name <input type="text" name ="name"  ></lable><br>
       <lable>User Email <input type="email" name="email"></lable><br>
       <input type="submit" name="submit" value="Sign up">     
     
    </form>
</body>
</html>



<?php

  if(isset($_POST ['submit'])){
      echo $name = $_POST['name'];
      echo $email = $_POST['email'];
  }

?>