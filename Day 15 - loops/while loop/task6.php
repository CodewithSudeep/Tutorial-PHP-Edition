<?php


//print multipication table of 1 to 10 using  loop
// display the output in HTML table format
$i=1;
while($i<=10){
    echo "<table>
    <tr><th colspan=2>Multiplciation table of $i</th>
    </tr>";
    $j=1;
    while($j<=10){
        echo "<tr>
          <td>$i*$j</td>
          <td>".$i*$j."</td>
        </tr>";
        $j++;
    }
    $i++;
   echo "</table>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,td,th{
        border:1px solid black;
        border-collapse:collapse;
    }
    tr:nth-child(even){
        background-color:yellow;
        color:red;
    }
    th{
        background-color:black;
        color:white;
    }
    
    
    </style>
</head>
<body>
    
</body>
</html>