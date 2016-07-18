<?php

  $cookie_name="user_visit";
  $month=time()+30*24*60*60;
  setcookie('user_visit',date("m/d/y"),$month);

?>


<?php
   if(isset($_COOKIE['user_visit'])){
       $last_visit=$_COOKIE['user_visit'];
       echo "Your last visited on this site on $last_visit";

   }
?>