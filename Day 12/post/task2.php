


#create a form which takes the number and checks if it is palindrome or not
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task2.php" method="POST">
    number: <input type="number" name="num" >
    <input type="submit" value="submit" name="submit">
    
    </form>
</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])){
        $Num=$_POST["num"];
        echo"the num is $Num";
        $revnum=strrev($Num);
        if($Num==$revnum){
            echo" <br/>$Num is palindrome";
        }
        else {
            echo" <br/>$Num is not palindrome";
        }

    }
}

?>