<?php


//print all even number in range 1 to 100 using do while loop
$i=1;
do{
    if($i%2==0)
    {
        echo $i."<br>";
    }
    $i++;
}
while($i<=100);
?>