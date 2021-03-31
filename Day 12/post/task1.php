<?php


#create a form which takes the breif introduction of user and calculates the total words.
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])){
        $intro=$_POST["introduction"];
        echo $intro;
        echo"<br/>";
        $count=str_word_count($intro);
        echo"total word is $count";
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
<form action="task1.php" method="post">
 <textarea name="introduction"></textarea>
<input type="submit" value="submit" name="submit">
</form>
    
</body>
</html>