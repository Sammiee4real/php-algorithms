<?php
// Write a PHP program to remove the character in a given position of a given string. The given position will be in the range 0..string length -1 inclusive.

function stringPosition($str,$pos)
{
       $chars = str_split($str);
       $newString = "";
       for($i=0; $i < count($chars); $i++)
       {
            if($i != $pos){
                $newString .= $chars[$i];
            }
       }
       return $newString;
}
echo stringPosition('Python',1).PHP_EOL;
echo stringPosition('Python',0).PHP_EOL;
echo stringPosition('Python',4).PHP_EOL;
?>