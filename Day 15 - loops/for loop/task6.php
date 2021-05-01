<?php


//print multipication table of 1 to 10 using  loop
// display the output in HTML table format
for($i=1;$i<=10;$i++){
    echo "<table>
    <tr><th colspan=2>Multiplciation table of $i</th>
    </tr>";
    for($j=1;$j<=10;$j++){
        echo "<tr>
          <td>$i*$j</td>
          <td>".$i*$j."</td>
        </tr>";
    }

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

    </style>
</head>
<body>

</body>
</html> 