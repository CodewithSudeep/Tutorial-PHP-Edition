<?php

$x = 66;
$y = 4;

//perform modulus operation and check whether result is less than 5 or is even number
$result =$x%$y;
echo $result;
echo"<br/>";

// hint : use if statement and logical OR operator
$r=$result/2;

 if( $result < "5" || $r="0"){
     echo $result,"is less than 5 or  even num";
 }
 