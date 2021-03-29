<?php

$base = 3;
$power = 4;

//find base to the power and check whether result is less than 10 or not

// hint: if(condition){echo  true;}else{echo false;}

$sak=pow(3,4);
if ($sak<10) {
    echo "value is Less  than 10";
}
elseif($sak>60){
    echo "value is greater than 10";
}
else{
    echo "Eror 404";
}
?>