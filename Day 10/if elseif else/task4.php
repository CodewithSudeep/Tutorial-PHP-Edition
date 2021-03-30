<?php

$x = 66;
$y = 4;
//perform modulus operation and check 
// 1. whether result is less than 5 or is even number 
// 2. whether the result is greater than 4 and is odd number
// 3. not 1 and 2
$var0=$x%$y;
$var1=$x%2;
$var2=$y%2;

if ($var0<5||$var1==0||$var2==0) {
    echo"result is less than 5 or is even number";
}
elseif($var0>4&&$var1!=0&&$var!=0){
echo"result is greater than 4 and is odd number";
}
else{
    echo "It is not 1 and 2";
}
?>