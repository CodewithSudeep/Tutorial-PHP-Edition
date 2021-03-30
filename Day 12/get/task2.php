<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saksham</title>
    </head>
<body>
<div id="main">
<h1>TICKET COUNTER</h1>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="ticket_num">Ticket Number:</label><br/>
<input type="number" name="ticket_num" id="ticket_num"  required></br>
<label for="destination">Destination:</label><br/>
<input type="text" name="destination" id="destination" required><br/>
<label for="from">From:</label><br/>
<input type="text" id="from" name="from" required><br/>
<label for="flight_name">Flight-name:</label><br/>
<input type="text" id="flight_name" name="flight_name" required><br/>
<input type="submit" name="submit">
</form>
</div>



<?php
// create form for tickect reservation having attributes:
//     ticket number
//     destination
//     from
//     flight name
// handle the form request and print the form data  
if($_SERVER["REQUEST_METHOD"]=="GET"){
  
    if (isset($_GET['submit'])){
     $number = $_GET['ticket_num'];
     $destiny = $_GET['destination'];
     $origin = $_GET['from'];
     $flight = $_GET['flight_name'];
     echo "<div id='display'>
    <h4>Flight_details</h4>
    <p>The flight_number is : $number </p>
    <p>Destination is : $destiny </p>
    <p>From : $origin </p>
    <p>The flight_name is : $flight </p>
    </div>";
    }
}
?>
</body>
</html>
