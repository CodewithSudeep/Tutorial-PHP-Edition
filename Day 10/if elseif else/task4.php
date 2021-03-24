<?php

$x = 66;
$y = 4;
$mod=$x%$y;
if($mod<5 || $mod%2==0){
    echo "either less  than 5 or even";
}
elseif ($mod>4 && $mod!=0) {
    echo "either greater than 4 and is odd";
}
else{
    echo "neither of them";
}
?>
