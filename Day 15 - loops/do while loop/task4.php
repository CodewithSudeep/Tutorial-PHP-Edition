<?php


//print all odd number in range 1 to 100 using do while loop
$a=1;
do{
    if(($a%2)!=0){
        echo $a."<br>";
    }
    $a++;
}
while($a<100);
?>