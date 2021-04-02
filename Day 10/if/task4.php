<?php

$x = 66;
$y = 4;

//perform modulus operation and check whether result is less than 5 or is even number

// hint : use if statement and logical OR operator

// if( condition1 || condition2)
$result=$x%$y;
echo "<br>result=",$result,"<br>";
if($result < 5  || $result%2==0){
    echo "Less than 5 or even number";
}



?>
