<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-handling</title>
    <style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }
    body{
        background-color:#ffffff;
    }
    h1{
        text-align:center;
        padding-top:10px;
    }
    form{
        width:325px;
        position:absolute;
        top:50px;
        left:25px;
        color:red;
    }
    #main{
        width:400px;
        height:300px;
        position:relative;
        top:250px;
        left:500px;
        border-radius: 45px;
        background: #ffffff;
        box-shadow:  10px 10px 20px #919191,
                   -10px -10px 20px #ffffff;
    }
    input[type="submit"]{
        margin-top:5px;
        background-color:black;
        color:white;
        height:25px;
        width:100px;
        border-radius:5px;
    }
    input[type="number"],input[type="text"]{
        width:100%;
        height:27px;
        outline:none;
        border:2px solid green;
        border-radius:5px;
    }
    input[type="submit"]:hover{
        background-color:green;
        color:white;
    }
    input[type="number"]:focus,input[type="text"]:focus{
        background-color:black;
        color:white;
    }
    #display{
        position:absolute;
        top:10px;
        left:10px;
        border:1px solid black;
        width:250px;
        height:150px;
    }

    </style>
</head>
<body>
<div id="main">
<h1>TICKET RESERVATION</h1>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="ticket-num">Ticket Number:</label><br/>
<input type="number" name="ticket-num" id="ticket-num"  required></br>
<label for="destination">Destination:</label><br/>
<input type="text" name="destination" id="destination" required><br/>
<label for="from">From:</label><br/>
<input type="text" id="from" name="from" required><br/>
<label for="flight-name">Flight-name:</label><br/>
<input type="text" id="flight-name" name="flight-name" required><br/>
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
   // var_dump($_GET);
    if (isset($_GET['submit'])){
     $number = $_GET['ticket-num'];
     $destiny = $_GET['destination'];
     $origin = $_GET['from'];
     $flight = $_GET['flight-name'];
     echo "<div id='display'>
    <h4>Flight-details</h4>
    <p>The flight number is : $number </p>
    <p>Destination is : $destiny </p>
    <p>From : $origin </p>
    <p>The flight name is : $flight </p>
    </div>";
    }
}
?>
</body>
</html>



