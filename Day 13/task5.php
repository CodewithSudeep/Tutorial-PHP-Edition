<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_REQUEST["submit"]))
    {
        header("location:test.php");
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
    <form method="POST" action="task5.php">
      <h3>Want to go Test file.<br>Hit! Submit</h3>
        <input type="submit" name="submit" value="Submit"/>
 
    </form>
</body>
</html>