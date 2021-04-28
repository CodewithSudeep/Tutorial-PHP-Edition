<?php


//print all even number in range 1 to 100 using do while loop

$n = 1;

do {
if( $n%2 == 0)
{
    echo $n;
    echo "<br/>";
}
    $n ++;

}

while ($n <= 100);

?>