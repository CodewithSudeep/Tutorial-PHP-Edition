<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $numbers = array();
    $numbers[] = 12;
    $numbers[] =24;
    $numbers[] = 36;
    $numbers[] = 48;
    $numbers[] = 60;
    $numbers[] = 72;
    $numbers[] = 84;
    $numbers[] = 96;
    $numbers[] = 108;
    $numbers[] = 120;
    // insert the multiples of 12 in similar way
    var_dump($numbers);

    // count the total items in array using count() function
    echo"<br/>";
    echo count($numbers);
    ?>
</body>
</html>