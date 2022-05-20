<?php
// Write a PHP program to create a new string which is 4 copies of the 2 front characters of a given string. If the given string length is less than 2 return the original string.
function fourCopies($str)
{
       return strlen($str) >= 2 ? str_repeat( substr($str,0,1).substr($str,1,1) , 4): $str ;
}
echo fourCopies('C Sharp').PHP_EOL;
echo fourCopies('JS').PHP_EOL;
echo fourCopies('Beautiful').PHP_EOL;

?>