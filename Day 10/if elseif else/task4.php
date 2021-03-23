<?php

$x = 66;
$y = 4;

//perform modulus operation and check 
// 1. whether result is less than 5 or is even number 
// 2. whether the result is greater than 4 and is odd number
// 3. not 1 and 2

$result = $x % $y;
if($result < 5 || $result % 2 == 0){
    echo "Result is less than 5 or is even number ";
}
elseif($result > 5 && $result % 2 == 0){
    echo "Result is greater than 4 and is odd number";
}
else{
    echo "Neither 1 nor 2";
}

?>