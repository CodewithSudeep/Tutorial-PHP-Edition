<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){


    if(isset($_POST["submit"])){
      $number=$_POST["number"];
      echo "the number is $number";
      $x=strrev($number);
      if($number==$x){
          echo " <br/> the $number is palindrome";
        
      }
      else{
          echo " <br/> the $number is not palindrome";
      }
    }
}


#create a form which takes the number and checks if it is palindrome or not

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome</title>
</head>
<body>

    <form action="task2.php"  method="POST">
    number: <input type="" name="number">

    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>