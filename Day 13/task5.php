<?php


// Google search about built in function header() and demonstarate the use
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])){
        header("location:test.php");
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
<form action="task5.php" method="post">
<input type="submit" value="SUBMIT" name="submit">

</form>
    
</body>
</html>