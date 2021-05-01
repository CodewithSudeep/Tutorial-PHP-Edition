<?php

//print the given sequence using for loop

// 1   2   3   4
// 2   4   6   8
// 3   6   9   12
// 4   8   12  16


for($i=1;$i<=4;$i++){
    for($j=1;$j<=4;$j++){
        echo ($i*$j)."&nbsp&nbsp";
    }
    echo "<br/>";
}
?>