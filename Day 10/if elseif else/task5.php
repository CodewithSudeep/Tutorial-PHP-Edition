<?php


$x= 5;
$y = 3;
$pro=$x*$y;
$mod=$pro%2;
//find the product and check whether the result is 
// 1. greater than 100 or is even number 
// 2. less than 20 and is even number
// 3. identical to 15 and is less than 19 
// 4. not 1, 2 and 3
if ($pro>100||$mod==0) {
    echo"product greater than 100 or is even number";
}
elseif($pro<20&&$mod==0)
{
    echo"product lesser than 20 and is even number";
}
elseif($pro===15 &&$pro<19){
echo"identical to 15 and is less than 19";
}
else{
    echo"Not 1,2,3";
}
?>


