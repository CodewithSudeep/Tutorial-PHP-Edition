<?php

$x = 66;
$y = 4;

//perform modulus operation and check whether result is less than 5 or is even number or not.

$var1= $x%$y;
$var2= $x%2;
$var3= $y%2;

if ($var1<5||$var2==0||$var3==0) {
    echo"result is less than 5 and even number";
}

else{    
    echo "eror 404";
}
?> 

