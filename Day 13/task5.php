<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_REQUEST["submit"])){
        header("location:task4.php");
    }
}


// Google search about built in function header() and demonstarate the use


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
    <form action="task5.php"  method ="POST">
    <h1>want to go to task4</h1><br>
    <input type="submit" name="submit" value="submit">
    
    </form>
</body>
</html>