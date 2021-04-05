<?php
// create a html form with two inputs for first name and last name;
// create 3 function: 
// 1. concate first name and last
// 2. calculates the length of first name and last name
// 3. returns the reverse of first name and last name
if($_SERVER['REQUEST_METHOD']=="POST"){
    //var_dump($_POST);
    if(isset($_POST['submit'])){
        $first = $_POST['firstname'];
        $last = $_POST['lastname'];

        //concat
        function concate($first,$last){
            return $first." ".$last;
        }
        $result = concate($first,$last);
        

        //calculate length
       function length($string){
           echo "The length of the string is ".strlen($string)."<br/>";
       }
       length($result);

       //reverse
       function reverse($string){
           return strrev($string);
       }
      echo "The reverse string is ".reverse($result)."<br/>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title></title>
</head>
<body>
    <b><?php if(isset($result)){ echo $result; } ?></b><br/>
    <form method="post" action="task8.php">
        Firstname: <input type="text" name="firstname" required><br/>
        Lastname: <input type="text" name="lastname" required><br/>
        <input type="submit" name="submit" value="SUBMIT"><br/>
    </form>
</body>
</html>