
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
    Ticket NO.:<input type="number" name="tkt_number"><br>
    From:<input type="text" name="from">
    Destination:<input type="text" name="dest"><br>
    Flight Name:<input type="text" name="flt_name"><br>
    <input type="submit">
    </form>
<?php

// create form for tickect reservation having attributes:
//     ticket number
//     destination
//     from
//     flight name

// handle the form request and print the form data
if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $tkt_num=$_REQUEST["tkt_number"];
    $frm=$_REQUEST["from"];
    $desti=$_REQUEST["dest"];
    $flight_name=$_REQUEST["flt_name"];
    if(empty($tkt_num))
    {
        echo "Fill Ticket Number";
    }
    elseif(empty($frm))
    {
        echo "Fill current flying location";
    }
    elseif(empty($desti))
    {
        echo "Fill flying destination";
    }
    elseif(empty($flight_name))
    {
        echo "Fill current flying name";
    }
    else{
        echo "Ticket NO:$tkt_num<br>From:$frm<br>Destination:$desti<br>Flight Name:$flight_name<br>";
    }

}
?>
</body>
</html>