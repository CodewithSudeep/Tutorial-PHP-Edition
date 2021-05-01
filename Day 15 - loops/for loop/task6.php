<?php


//print multipication table of 1 to 10 using  loop
// display the output in HTML table format
for($i=1;$i<=10;$i++){
     echo"<html>
    <head>
        <title>Document</title>
    </head>
    <body>
    <table>
    <tr><th>Multiplication Table of $i</th>
    </tr>";
    for($j=1;$j<=10;$j++)
    {
        echo"<tr>
        <td>$i*$j =</td>
        <td>".$i*$j."</td>;
        </tr>";
    }

    echo "</table>";

}
