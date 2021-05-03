<?php


$x= 5;
$y = 3;
echo "x=",$x,"<br>";
echo "y=",$y,"<br>";
//find the product and check whether the result is 
// 1. greater than 100 or is even number 
// 2. less than 20 and is even number
// 3. identical to 15 and is less than 19 
// 4. not 1, 2 and 3
$prod=$x*$y;
echo "x*y=",$prod,"<br>";

if($prod>100 || $prod %2==0){
    echo "greater than 100 or even number";
}
elseif($prod<20 || $prod %2==0){
    echo "less than 20 or even number";
}
elseif($prod===15 && $prod<19){
    echo "identical to 15  and less than 19";
}
else{
    echo "none of the above";
}

?>

