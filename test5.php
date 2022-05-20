<?php
// Write a Program to create given pattern with * using for loop
// Description:
// Write a Program to create following pattern using for loops:

// *
// **
// ***
// ****
// *****
// ******
// *******
// ********

// for($row=1;$row<=8;$row++)
// {
//    for ($star=1;$star<=$row;$star++)
//     {
//      echo "*";
//      }
//  echo "<br>";
// }

function printAsterik($count)
{
       for($i=1; $i <= $count; $i++)
       {
            echo str_repeat(' * ', $i).PHP_EOL;
       }
}
printAsterik(16);
?>