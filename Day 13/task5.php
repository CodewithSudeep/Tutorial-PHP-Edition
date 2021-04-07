<?php

// Google search about built in function header() and demonstarate the use
 if(isset($_POST['submit'])){
     header("location:https://www.facebook.com/groups/3265547303565933");   //header funtion here is used to redirect current page to codewithsudeep group
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
    <form  method="post" action="task5.php">  
    <button name="submit">Visit Codewithsudeep</button>
    </form>
</body>
</html>