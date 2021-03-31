<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form-handling</title>
</head>
<body>
    
  <form action="task2.php" method="get">
  ticket number: <input type="text" name="ticket name">
  destination: <input type="text" name="destination">
  from: <input type="text" name="from">
  flight name: <input type="text" name="flight name">
  <input type="button" value="submit" name="submit">
  </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    if (isset($_GET["submit"])){

        var_dump($_GET);
    }
  }
?>