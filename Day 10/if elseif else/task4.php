<?php

$x = 66;
$y = 4;

//perform modulus operation and check 
// 1. whether result is less than 5 or is even number 
// 2. whether the result is greater than 4 and is odd number
// 3. not 1 and 2
$result=$x%$y;
$r=$result/2;
if($result<"5" || $r="0"){
    echo $result,"is less than 5 or even number";
}elseif($result>"4" && $r!="0"){
    echo $result, "is greater than 4 and is odd number";
}else{
    echo $result,"neither <5or even nor >4 and odd";
}
?>

