<?php

//use PHP math function to calculate the area of circle having radius 4.5m

$rad = 4.5;
$pi = pi();
function areaofcircle($rad,$pi)
{
    $area = $pi * $rad * $rad;

    return $area;
}

echo areaofcircle($rad,$pi);

?>