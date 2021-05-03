<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,th,td{
        border:solid black 1px;
        border-collapse:collapse;
    }
    th{
        background:black;
        color:white;
    }
</style>
<body>
    
</body>
</html>
<?php
//print multipication table of 1 to 10 using  loop
// display the output in HTML table format
$x=1;
while($x<=10){
    $y=1;
       echo "<table>
    <tr><th colspan=2>Multiplciation table of $x</th>
    </tr>";
    while($y<=10){
        echo "<tr>
        <td>$x*$y</td>
        <td>".$x*$y."</td>
      </tr>";
        $y++;
    };
    echo "<br><br>";
    $x++;
    echo "</table>";
};
?>
