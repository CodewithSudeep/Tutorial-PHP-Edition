<?php

//print the given sequence using for loop

// 1   2   3   4
// 2   4   6   8
// 3   6   9   12
// 4   8   12  16

$j=0;
for($x=1;$x<=4;$x++){
    for($j=1;$j<=4;$j++){
        echo $j*$x," ";
    };
    echo "<br>";
};


?>


