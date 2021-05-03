<?php


//print all prime number in range 1 to 100 using do while loop
$x=1;
echo "The prime number in range 1-100 are listed below:<br>";
do{
    $i=1;
    $count=0;
    while($i<$x){
        if($x%$i==0){
            $count++;
        }
        $i++;
    };
    if($count==1){
        echo $x."<br>";
    }
    $x++;
}while($x<=100);

?>