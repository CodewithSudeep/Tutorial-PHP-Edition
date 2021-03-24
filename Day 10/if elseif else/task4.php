<?php

$x = 66;
$y = 4;

//perform modulus operation and check 
// 1. whether result is less than 5 or is even number 
// 2. whether the result is greater than 4 and is odd number
// 3. not 1 and 2

$mod = $x % $y;
$m2 = $mod % 2;

if($mod<5 || $m2=0)
{
    echo "the result is less than 5 or is even";
}

else if ($mod>4 && $m2!=0)
{
    echo "the result is greater than 4 and odd";
}

else{
    echo "neither of 1 and 2";
}
?>
