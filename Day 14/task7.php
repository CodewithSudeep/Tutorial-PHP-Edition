<?php

// create a function which takes an array of characters and returns the string
function array_to_string($arry)
{
    return (implode(" ",$arry));
}
$arry=array("ram","hari");
$string=array_to_string($arry);
echo $string;
?> 