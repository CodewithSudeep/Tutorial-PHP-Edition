<?php


$x= 5;
$y = 3;
$prod =$x*$y;
if($prod>100 || $prod%2==0){
    echo "greater than 100 oe even";
}
elseif($prod<20 && $prod%2==0){
 echo "less than 20 and even";
}
elseif($prod==15 && $prod<19){
echo "identical to 15 and less than 19";
}
else{
    echo "neither of above";
}
?>

