
<?php

$base = 3;
$power = 4;

//find base to the power and check whether result is 
// 1. less than 10 or 
// 2. greater than 60
// 3. not 1 and 2


$y=pow($base,$power);
if ($y<10) {
    echo "value is Less than 10";
}
elseif($y>60){
    echo "value is Greater than 10";
}
else{
    echo " Not 1 and 2";
}
?>