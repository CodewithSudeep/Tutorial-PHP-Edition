<?php


$x= 5;
$y = 3;

//find the product and check whether the result is greater than 100 or is even number or non of these;
$pro=$x*$y;
$result=$pro%2;
if ($result==0 || $pro>100) {
    echo"The product is grater than 100 and even number";
}
else{
    echo"The product is lesser than 100 and odd number";
}
?>

