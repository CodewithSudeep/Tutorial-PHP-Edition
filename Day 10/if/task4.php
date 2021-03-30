<?php

$x = 66;
$y = 4;

$var1= $x%$y;
$var2= $x%2;
$var3= $y%2;
//perform modulus operation and check 
// 1. whether result is less than 5 or is even number 
// 2. whether the result is greater than 4 and is odd number
// 3. not 1 and 2

if ($var1<5||$var2==0||$var3==0) {
    echo"result is less than 5 and even number";
}
else if($var1>4 && $var2!=0 && $var3!=0){
echo "result is greater than 4 and odd odd number";
}
else{
    echo "eror 404";
}
?> 

