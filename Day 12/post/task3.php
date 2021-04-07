<?php

#create and array for student and thier marks

#example: 
// $results = array("ram"=>45,"sita"=>80);
// $name = "ram";
// echo $results[$name];
#create form which takes the name of student and print their marks if it exist in array

#otherwise print "try another name"
$results = array("ram"=>45,"sita"=>80,"hari"=>95);
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        if(isset($results["$name"])){
            echo"$name:".$results["$name"];
        }
        else
        echo"try another name";

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
<form action="task3.php" method="post">
name: <input type="text"name="name">
<input type="submit" value="submit" name="submit">

</form>
    
</body>
</html>