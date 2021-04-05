<?php

// create an associative array 
// create a function which returns the key of associative array

$arr = ["apple"=>1,"banana"=>2,"mango"=>3];

function num($arr)
{
    return array_keys($arr);
}

print_r(num($arr)) ;
?>
