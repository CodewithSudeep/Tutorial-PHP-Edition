<?php


//print all prime number in range 1 to 100 using while loop
$x=2;
echo "The prime numbers between 1 aand 100 are : <br>";
while($x<=100){
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
};

?>