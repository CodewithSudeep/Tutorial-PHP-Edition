<?php

$x = 66;
$y = 4;

//perform modulus operation and check whether result is less than 5 or is even number or not.
$result = $x % $y;
if($result < 5 || $result % 2 == 0){
    echo "true";
}
else{
    echo "false";
}
?>