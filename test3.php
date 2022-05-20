<?php
// Write a factorial program using for loop in php
// Description:

// Write a program to calculate factorial of a number using for loop in php
function forLoopFactorial($number)
{
   if($number < 2){
        echo 1;
   }else {
       $result = 1;
       for($i=$number; $i >= 1; $i--)
       {
            $result = $result * $i;
       }
       echo $result;
   }

}
forLoopFactorial(4);
?>