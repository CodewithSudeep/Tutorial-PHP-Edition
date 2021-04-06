<?php

//create a function which takes a string argument and returns the character in array
function string_to_array($string1)
{
    return explode(" ",$string1); 
}
$y=string_to_array("my name is Aadarsha");
print_r($y);
?>