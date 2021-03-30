<?php


// create form for tickect reservation having attributes:
//     ticket number
//     destination
//     from
//     flight name

// handle the form request and print the form data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="task2.php">
    
    Ticket Number:<input type="text" name="fticket"><br>
    Destination:<input type="text" name="fdestination"><br>
    From:<input type="text" name="ffrom"><br>
    Flight Name:<input type="text" name="fflight"><br>
    <input type="submit" name="submit"><br>
    
    </form>
<?php
if($_SERVER["REQUEST_METHOD"]== "GET")
{ 
    
    if(isset($_GET["submit"])){
        echo $_GET["fticket"];
        echo "<br/>";
        echo $_GET["fdestination"];
        echo "<br/>";
        echo $_GET["ffrom"];
        echo "<br/>";
        echo $_GET["fflight"];
        echo "<br/>";
    }
};

?>

</body>
</html>