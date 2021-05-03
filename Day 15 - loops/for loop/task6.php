<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
    
</body>
</html>
<?php
//print multipication table of 1 to 10 using  loop
// display the output in HTML table format
echo "<table>";
for($x=1;$x<=10;$x++){
    echo "<table>
    <tr><th colspan=2>Multiplciation table of $x</th>
    </tr>";
    for($y=1;$y<=10;$y++){
        echo "<tr>
          <td>$x*$y</td>
          <td>".$x*$y."</td>
        </tr>";
    }  
   echo "</table>";
}
?>
