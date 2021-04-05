<?php


$intro = "Hey!,Are,you,enjoying,PHP?";

// create a function which generates an array of characters in given string
// create another function which reverses the array from 1.
// create another function which joins all characters in array of 2 and print it.



function generatearr($str)
{

    return explode(",",$str);

}

$arr = generatearr($intro);

print_r($arr);
echo "<br/>";


function reverse($aray)
{
    return array_reverse($aray);
}

print_r(reverse($arr)) ;

echo "<br/>";

function stringconv($aray)
{
    return implode($aray);
}

echo stringconv($arr);

?>


