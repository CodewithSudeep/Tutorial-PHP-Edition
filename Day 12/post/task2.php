<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <label>Enter a number: </label>
    <input type="number" name="palindrome"> <br> <br>
    <input type="submit" name="submit">
    </form>
</body>
</html>
<?php


#create a form which takes the number and checks if it is palindrome or not
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit'])){
        $number = $_POST['palindrome'];
        $rev = strrev($number);
        if($number == $rev)
        {
            echo "$number is Palindrome";
        }
        else{
            echo "$number is not Palindrome";
        }
    }
}

?>