<?php


//print all prime number in range 1 to 100 using for loop
for($i=2;$i<=100;$i++){
    $count =0;
    for($j=1;$j<$i;$j++){
        if(($i%$j)==0){
            $count++;
        }
    }
    if($count==1){
        echo $i."<br/>";
    }
}