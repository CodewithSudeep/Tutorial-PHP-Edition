<?php
$x= 5;
$y = 3;
$z=$x*$y;
$a=$z%2;
//find the product and check whether the result is 
// 1. greater than 100 or is even number 
// 2. less than 20 and is even number
// 3. identical to 15 and is less than 19 
// 4. not 1, 2 and 3
if ($z>100||$a==0) {
    echo"greater than 100 or is even number";
}
elseif($z<20&&$a==0)
{
    echo"less than 20 and is even number";
}
elseif($z===15 && $z<19){
echo"identical to 15 and is less than 19 ";
}
else{
    echo"not 1, 2 and 3";
}
?>
