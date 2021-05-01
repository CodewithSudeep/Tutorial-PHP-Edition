<<<<<<< HEAD
<?php


#create a form which takes the number and checks if it is palindrome or not


?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h3>Enter the number to be checked for palindrome:</h3>
    Number: <input type="number" name="palindrome"><br>
    <input type="submit" name="submit">
    </form>

<?php
#create a form which takes the number and checks if it is palindrome or not
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['submit'])){
        $num=$_REQUEST['palindrome'];
        $pal=strrev($num);
        if($num==$pal){
            echo $num," is palindrome";
        }else{
            echo $num," is not palindrome";
        }
    }
}
?>
</body>
</html>



>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
