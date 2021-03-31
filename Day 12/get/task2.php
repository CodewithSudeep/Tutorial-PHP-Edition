<?php
// create form for tickect reservation having attributes:
//     ticket number
//     destination
//     from
//     flight name

// handle the form request and print the form data



if ($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET["submit"])){
        var_dump($_GET);
    }
}




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
<form action="task2.php" method="GET">
ticket num: <input type="text" name="ticket num"/>
destination: <input type="text" name="place"/>
from: <input type="text" name="from"/>
flight name: <input type="text" name="fname"/>
<input type="submit" value="submit" name="submit"/>
</form>
    
</body>
</html>