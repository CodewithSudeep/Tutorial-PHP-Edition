<?php

#create and array for student and thier marks

#example: 
// $results = array("ram"=>45,"sita"=>80);

#create form which takes the name of student and print their marks if it exist in array

#otherwise print "try another name"


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
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
    
   Name of Student: <input type="text" name="fname">
   <input type="submit" name="submit">
    
    </form>
</body>
</html>

<?php
$arr=["sarbendra"=>75,"karan"=>55,"slain"=>85,"abishek"=>60];

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = $_POST["fname"];

    if(isset($arr["$name"]))
    {
        echo $arr[$name];

    }
else
{
    echo "try another name";
}
}
?>