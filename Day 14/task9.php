<?php

// create an associative array 
// create a function which returns the key of associative array


function associativeArry()
{
    $arry=array("Raj"=>"19","rik"=>"21");
    return array_keys($arry);
}
$arry=associativeArry();
print_r($arry);
?> 