<?php


$x= 55;
$y = 3;

//find the product and check whether the result is greater than 100 and is even number;
$product = $x * $y;
if($product > 100 && $product % 2 ==0)
{
    echo "true";                        //doesnot print anything because condition is false.
}

?>
