<<<<<<< HEAD
<?php 

//create 5 constant for country name and their short code 
//example : AUS for austrlai : define("AUS","australia);
//and print them using html table with column country name and shortcode
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
//create 5 constant for country name and their short code 
//example : AUS for austrlai : define("AUS","australia);
//and print them using html table with column country name and shortcode

define("USA","United States of America");
define("IND","India");
define("UK","United Kingdom");
define("NEP","Nepal");
define("JAP","Japan");

echo "<table >
  <tr>
    <th>Country Name</th>
    <th>Short Code</th> 
  </tr> ";

  echo "<tr>";
 echo  "<td>",USA,"</td>";
  echo "<td>","USA","</td>";
  echo "</tr>";

  echo "<tr>";
 echo  "<td>",IND,"</td>";
  echo "<td>","IND","</td>";
  echo "</tr>";
  
  echo "<tr>";
 echo  "<td>",UK,"</td>";
  echo "<td>","UK","</td>";
  echo "</tr>";

  echo "<tr>";
  echo  "<td>",NEP,"</td>";
  echo "<td>","NEP","</td>";
  echo "</tr>";

  echo "<tr>";
 echo  "<td>",JAP,"</td>";
  echo "<td>","JAP","</td>";
  echo "</tr>";
echo "</table> ";
?>

</body>
</html>







>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
