<?php 

//create 5 constant for country name and their short code 
//example : AUS for austrlai : define("AUS","australia);
//and print them using html table with column country name and shortcode
define("nep","nepal",false);
define("ind","india");
define("jap","japan");
define("chi","china");
define("usa","america");
echo "<table> 
<tr><th>country name</th>
<th>short code</th>
</tr>";
echo "<tr><td>",nep,"</td>";
echo "<td>nep</td></tr>";
echo "<tr>";
echo "<td>",ind,"</td>";
echo "<td>","ind","</td>";
echo "</tr>";
echo "<tr>";
echo "<td>",jap,"</td>";
echo "<td>","jap","</td>";
echo "</tr>";
echo "<tr>";
echo "<td>",chi,"</td>";
echo "<td>","chi","</td>";
echo "</tr>";
echo "<tr>";
echo "<td>",usa,"</td>";
echo "<td>","america","</td>";
echo "</tr>";
echo "</table>"


?>
