<?php


$x= 5;
$y = 3;

//find the product and check whether the result is greater than 100 or is even number or non of these;

$product = $x * $y;
if($product > 100 || $product % 2 ==0)
{
    echo "true";                       
}

else{
    echo "false";
}
?>
