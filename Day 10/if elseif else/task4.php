<?php

$x = 66;
$y = 4;

//perform modulus operation and check 
// 1. whether result is less than 5 or is even number 
// 2. whether the result is greater than 4 and is odd number
// 3. not 1 and 2

$mod = $x%$y;
if($mod<5||$mod%2==0){
    echo "Might be less then 5 or even";
}elseif($mod>4 && $mod%2 != 0){
  echo "Might be greater than 4 and odd";
}else{
    echo "None of these";
}
?>