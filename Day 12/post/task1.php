
<?php


#create a form which takes the breif introduction of user and calculates the total words.

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
<<<<<<< HEAD
    <form method="POST" action="task1.php">
    Describe Yourself: <textarea name="fdescribe"></textarea><br> 
    <input type="submit" name="submit">
    </form>
    <?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
 
$description= $_POST["fdescribe"];

echo strlen($description);
}

?>
</body>
</html>

=======
    <form method="post">
    <textarea name="intro"></textarea>
    <input type="submit">
    
    </form>

</body>
</html>
>>>>>>> b218067becdcb46c38497d185e0632c5c188c1ab
