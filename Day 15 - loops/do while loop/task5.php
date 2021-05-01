<?php


//print all prime number in range 1 to 100 using do while loop
$num=2;
do{
    $i=1;
    $count=0;
    do{

        if($num%$i==0){
            $count++;
        
        }
        $i++;
    }while($i<$num);

    if($count==1){
        echo "$num.<br/>";

    }
    $num++;
}while($num<=100);
?>