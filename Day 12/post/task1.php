<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){


    if(isset($_POST["submit"])){
        $intro= $_POST["introduction"];
        echo $intro;
        echo "<br/>";
        $count=str_word_count($intro);
        echo "the total word is:$count" ;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brief introduction</title>
</head>
<body>
    <form action="task1.php" method="post">
    <textarea name="introduction" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="submit" name="submit">
    
    </form>
</body>
</html>
