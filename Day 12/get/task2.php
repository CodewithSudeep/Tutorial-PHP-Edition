<<<<<<< HEAD
<?php

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
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
Ticket.no <input type="number" name="_ticket"><br>
Destination <input type="text" name="_destination"><br>
From <input type="text" name="_from" ><br>
Flight name  <input type="name" name="_name"><br>
<input type="submit" name="submit">
</form>
<?php
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5

// create form for tickect reservation having attributes:
//     ticket number
//     destination
//     from
//     flight name

<<<<<<< HEAD
// handle the form request and print the form data
=======
// handle the form request and print the form data
if ($_SERVER["REQUEST_METHOD"] == "GET") {
 if (isset($_GET['submit'])){
    $aa=$_REQUEST['_ticket'];
    $bb=$_REQUEST['_destination'];
    $cc=$_REQUEST['_from'];
    $dd=$_REQUEST['_name'];
    echo "Flight Details:<br>";
    echo "Ticket.no:",$aa,"<br>";
    echo "Destination:",$bb,"<br>";
    echo "From:",$cc,"<br>";
    echo "Flight name::",$dd,"<br>";
}else{
    echo "Empty";
}
}
?>
</body>
</html>

>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
