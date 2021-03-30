<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    About Yourself:<textarea name="description"></textarea>
    <input type="submit">
    </form>
    <?php
#create a form which takes the breif introduction of user and calculates the total words.
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $intro=$_POST["description"];
        $word_count=str_word_count($intro);
        if(empty($intro))
        {
            echo"Fill the box";
        }
        else{
            echo"Total Word:$word_count";
        }
    }
    ?>
</body>
</html>