<?php

$x = 66;
$y = 4;

//perform modulus operation and check whether result is less than 5 or is even number
// hint : use if statement and logical OR operator
// if( condition1 || condition2)
$modulo = $x%$y;
if($modulo<5||$modulo%2==0){
  echo "Might be less than 5 or even number";
}
?>
