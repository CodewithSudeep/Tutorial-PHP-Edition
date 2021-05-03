<?php


$x= 55;
$y = 3;

//find the product and check whether the result is greater than 100 and is even number;
$prod=$x*$y;
echo "Result=",$prod,"<br>";
if($prod>100 && $prod%2==0){
    echo "True";
}else{
    echo "False";
}

?>

