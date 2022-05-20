<?php

function exchangeFirstLast($str)
{
       $first = substr($str,0,1);
       $last = substr($str,-1);
       $others = substr($str,1, (strlen($str) - 2) );
       $newString = $last.$others.$first;
       
       return $newString;
}
echo exchangeFirstLast('a').PHP_EOL;

?>