<?php

// create a function which takes an array of characters and returns the string
function array_to_string($arry)
{
    return (implode(" ",$arry));
}
$arry=array("It","is","beautiful","day.");
$string=array_to_string($arry);
echo $string;
?>