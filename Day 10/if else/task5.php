<?php


$x= 5;
$y = 3;

//find the product and check whether the result is greater than 100 or is even number or non of these;

$x=5%2;
$y=3%2;
$z=$x*$y;
echo $z;
if ($z>100||$x=0||$y==0) {
    echo"result is greater than 100 and even number";
}

else{    
    echo "eror 404";
}
 ?>