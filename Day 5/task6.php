<?php 

//create 5 constant for country name and their short code 
//example : AUS for austrlai : define("AUS","australia);
//and print them using html table with column country name and shortcode

define("NEP","Nepal");
define("AUS", "Australia");
define("GER","Germany");
define("FRA","France");
define("RUS","Russia");

echo"<table border='1'  cellpadding='5'>
<tr>
    <th>
        Shortcode
    </th>

    <th>
        Country name
    </th>

</tr>";

echo "<tr>";
echo "<td>","NEP","</td>";
echo "<td>" , NEP, "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>","AUS","</td>";
echo "<td>" , AUS, "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>","GER","</td>";
echo "<td>" , GER, "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>","FRA","</td>";
echo "<td>" , FRA, "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>","RUS","</td>";
echo "<td>" , RUS, "</td>";
echo "</tr>";


echo"</table>";

?>
