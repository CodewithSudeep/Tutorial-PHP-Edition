<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Reservation</title>

</head>
<body>
    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="GET">
    <label>Ticket Number:</label>
    <input type="number" name="tnum"> <br> <br>

    <label>Destination:</label>
    <input type="text" name="dest"> <br> <br>

    <label>From:</label>
    <input type="text" name="from"> <br> <br>

    <label>Flight Name:</label>
    <input type="text" name="flight"> <br> <br>

    <input type="submit" name="submit"> <br> <br>
    </form>
</body>
</html>
<?php


// create form for tickect reservation having attributes:
//     ticket number
//     destination
//     from
//     flight name

// handle the form request and print the form data

if($_SERVER["REQUEST_METHOD"] == "GET"){
    //collecting values
    if(isset($_GET['submit'])){
        $tnum = $_GET['tnum'];
        $dest = $_GET['dest'];
        $from = $_GET['from'];
        $flight = $_GET['flight'];
        echo "Your ticket number :", $tnum . "<br>";
        echo "Your Destination :", $dest . "<br>";
        echo "From :", $from . "<br>";
        echo "Flight Name :", $flight . "<br>";

    }
}

?>