<?php


//print all prime number in range 1 to 100 using while loop
$i=2;

while($i<=100){
    $n=1;
    $count=0;
    while($n<=$i){
    if(($i%$n)==0){
        $count++;
    }
    $n++;   
}
if($count==2){
    echo $i."<br>";
}
$i++;
}
?>