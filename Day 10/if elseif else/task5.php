<?php


$x= 5;
$y = 3;

//find the product and check whether the result is 
// 1. greater than 100 or is even number 
// 2. less than 20 and is even number
// 3. identical to 15 and is less than 19 
// 4. not 1, 2 and 3

$product = $x * $y;
if($product > 100 || $product % 2 ==0)
{
    echo "Product is greater than 100 or is even number";                       
}

elseif($product < 50 && $product % 2 ==0){
    echo "Result is less than 20 and is even number";
}
elseif($product === 15 && $product < 19){
    echo "Product is identical to 15 and is less than 19";
}
else{
    echo "Not 1 ,2 and 3";
}
?>