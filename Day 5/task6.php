<?php 

//create 5 constant for country name and their short code 
//example : AUS for austrlai : define("AUS","australia);
//and print them using html table with column country name and shortcode

define("AUS","Australia");
define("NEP","Nepal");
define("IN","India");
define("AFG","Afganistan");
define("RUS","Russia");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAY:5 PHP </title>
</head>
<body>
    


    <table border="1">
    <tc>
    <th>COUNTRY NAME</th>
    <th>SHORT CODE</th>
    
    </tc>
    <tr><td><code><?php echo AUS; ?></code></td>
    <td><code><?php echo "AUS"; ?></code></td>
    </tr>
    <tr><td><code><?php echo NEP; ?></code></td><td><code><?php echo "NEP"; ?></code></td></tr>
    <tr><td><code><?php echo IN; ?></code></td><td><code><?php echo "IN"; ?></code></td></tr>
    <tr><td><code><?php echo AFG; ?></code></td><td><code><?php echo "AFG"; ?></code></td></tr>
    <tr><td><code><?php echo RUS; ?></code></td><td><code><?php echo "RUS"; ?></code></td></tr>
    </table>
</body>
</html>