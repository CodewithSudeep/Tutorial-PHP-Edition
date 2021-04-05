<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML table in php</title>
    <style>
       table,th,td{
           border :3px solid green;
           border-collapse:collapse;
       }
       table tr:nth-child(odd){
           background-color: gray;
       }
       table th{
           color:white;
           background-color:black;
       }
    </style>
</head>
<body>
<?php 

//create 5 constant for country name and their short code 
//example : AUS for austrlai : define("AUS","australia);
//and print them using html table with column country name and shortcode

define("AUS","Australia");
define("IND","India");
define("BEL","Belgium");
define("CAN","Canada");
define("NPL","Nepal");

echo "<table>
<tr>
<th>Country name</th>
<th>Shortcode</th>
</tr>";
echo "<tr>";
echo "<td>",AUS,"</td>";
echo "<td>","AUS","</td>";
echo"</tr>";
echo "<tr>";
echo "<td>",IND,"</td>";
echo "<td>","IND","</td>";
echo"</tr>";
echo "<tr>";
echo "<td>",BEL,"</td>";
echo "<td>","BEL","</td>";
echo"</tr>";
echo "<tr>";
echo "<td>",CAN,"</td>";
echo "<td>","CAN","</td>";
echo"</tr>";
echo "<tr>";
echo "<td>",NPL,"</td>";
echo "<td>","NPL","</td>";
echo"</tr>";

echo "</table>";
?>
</body>
</html>
