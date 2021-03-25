<?php

$x = 66;
$y = 4;

//perform modulus operation and check whether result is less than 5 or is even number or not.
$mod=$x%$y;
echo "ans=",$mod,"<br>";

if($mod>5 || $mod%2==0){
    echo "True";
}else{
    echo "False";
}

?>