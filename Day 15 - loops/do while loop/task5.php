<?php


//print all prime number in range 1 to 100 using do while loop
$a=2;
do{
$i=1;
$count=0;
do{
    if(($a%$i)==0){
        $count++;
    }
    $i++;
}
    while($i<=$a);
    if($count==2){
        echo $a."<br>";
    }
    $a++;
}
while($a<100);
?>
