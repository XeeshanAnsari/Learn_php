<?php
   
  // Arthimatic Operator
 
  echo "<h4>Arthimatic Operator</h4>"; 
  $num1 = 5 ;
  $num2 = 5 ;
  $result = 0;

   $result = $num1 + $num2;
   echo "<br> Addition is : " . $result;
   $result = $num1 - $num2;
   echo "<br> Subtruction is : " . $result;
   $result = $num1 * $num2;
   echo "<br> Multiplition is : " . $result;
   $result = $num1 / $num2;
   echo "<br> Divition is : " . $result;
    
   
   // Assignment Operator
   echo "<h4>Assignment Operator</h4>";
    $num3 = 5 ;
    echo "<br><br>Number is  : " . $num3 ;
 

   // Incrementing  & decrementing Operator
    echo "<h4>Incrementing  & decrementing Operator</h4>";
    $num4 = 5 ;
    $num4 --;
    echo "<br><br>Number is  : " . $num4 ;
    $num4 ++;
    echo "<br>Number is  : " . $num4 ;


    // Comparision Operator
    echo "<h4>Comparision Operator</h4>";
     
    if($num1==$num2){
        echo "Number is  Equal";
    }
     if($num1>$num2){
        echo "Number 1 is  Greater";
    }
     if($num1<$num2){
        echo "Number 1 is  Lesser";
    }


    // Logical Operator
    echo "<h4>Logical Operator</h4>";
     
    if($num1==$num2  OR  $num1<$num2  OR $num1>$num2  ){
        echo "Number is  Equal";
    }
    if($num1==$num2  AND $num1<$num2  ){
        echo "Number is  Equal";
    }





?>