<?php


//print all prime number in range 1 to 100 using while loop
$num=2;


while($num<100){
    $n=1;
    $count=0;
    while($n<=$num){
    if(($num%$n)==0){
        $count++;
    }
    $n++;   
}
if($count==2){
    echo $num."<br>";
}
$num++;
}
?>