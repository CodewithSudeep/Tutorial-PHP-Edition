<?php


//print multipication table of 1 to 10 using  loop
// display the output in HTML table format
$i=1;

while($i<=10){
    echo"<html>
    <head>
        <title>Document</title>
    </head>
    <body>
    <table>
    <tr><th>Multiplication Table of $i</th>
    </tr>";
    $j=1;
    while($j<=10)
    {
        echo"<tr>
        <td>$i*$j =</td>
        <td>".$i*$j."</td>;
        </tr>";
        $j++;
    }
    echo "</table>";
    $i++;
    
}