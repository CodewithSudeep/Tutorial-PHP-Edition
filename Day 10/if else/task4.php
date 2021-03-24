<?php

$x = 66;
$y = 4;

//perform modulus operation and check whether result is less than 5 or is even number or not.
$modulo = $x%$y;
if($modulo<5||$modulo%2==0){
    echo "The result might be less than 5 or even number";
}else{
    echo "Neither less than 5 nor even";
}
?>