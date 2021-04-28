<?php

// find all palindrome number in range of 100 - 1000 using do while loop.
echo "all palindrome number in range of 100 - 1000";
$num=100;
$s=0;
do{
    do{
    $num_cpy=$num;
    $r=$num_cpy%10;
    $s=$s*10+$r;
    $num_cpy=$num_cpy/10;
    }
    while($num_cpy>0);
    if($num_cpy==$num)
    {
        echo $num_cpy."<br>";
    }
    $num++;
}
while($num<=1000);
?>