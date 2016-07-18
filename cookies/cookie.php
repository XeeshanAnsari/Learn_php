<?php
   
    $cookie_name="user";
    $cookie_value="John Doe";
    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");

?>


<html>
<body>
<?php

 if(isset($_COOKIE['$cookie_name'])){
     echo "Cookie Named" . $cookie_name ."is not set!";
 }else{
     echo "cookie " . $cookie_name . " is set!";
     echo "</br>";
     echo "value is : " . $_COOKIE[$cookie_name];
 }
?>
<?php
    if(isset($_COOKIE['user'])){
        $last_visit=$_COOKIE['user'];
        echo "</br></br>Dear your last user  Visited to this site on $last_visit";
    }
?>


</body>
</html>