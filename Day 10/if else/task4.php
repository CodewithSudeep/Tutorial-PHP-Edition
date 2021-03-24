<?php

$x = 66;
$y = 4;
$mod=$x%$y;
if($mod<5 || $mod%2==0){
    echo "might be less than 5 or even";
}
else{
    echo "neither less nor even";
}
?>
