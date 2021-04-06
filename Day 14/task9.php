<?php

// create an associative array 
// create a function which returns the key of associative array

function key_associativeArry()
{
    $arry=array("Ram"=>"23","shyam"=>"19","hari"=>"25");
    return array_keys($arry);
}
$arry_keys=key_associativeArry();
print_r($arry_keys);
?>