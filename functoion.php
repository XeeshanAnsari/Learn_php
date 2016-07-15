<?php
     
    function Info(){
    
      echo $name ="<br>xeeshan";
      echo $email ="<br>xeeshan@gmail.com<br>";
      echo $age = 18;
    }
    function incldefun(){
        include("./echo.php");
    }

    info();
    echo "<br><br>File Include <br>";
    incldefun(); 
    
     

?>