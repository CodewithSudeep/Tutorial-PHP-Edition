<?php

$base = 3;
$power = 4;
echo "base=",$base,"<br>","power=",$power,"<br>";
//find base to the power and check whether result is 
// 1. less than 10 or 
// 2. greater than 60
// 3. not 1 and 2


$ans=$base**$power;
echo "base^power=",$ans,"<br>";
if($ans <10){
    echo "less than 10";
}
elseif($ans >60){
    echo "greater than 60";
}
else{
    "between 10 and 60";
}


?>
