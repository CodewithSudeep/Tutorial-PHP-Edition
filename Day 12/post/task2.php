<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome_number checker</title>
</head>
<body>
 <form method="POST" action="task2.php">
  <label for="number">Enter the number to check  palindrome numbers:</label><br/>
  <input type="Number" required placeholder="Number" id="number" name="number">
  <input type="submit">
 </form>
 <?php
#create a form which takes the number and checks if it is palindrome or not
$num = $_POST['number'];
if(empty($num)){
    echo "Input required";
}else{
$temp = "$num";
//var_dump($temp);
$rev = strrev($temp);
if($temp==$rev){
  echo "The number $num is palindrome";
}else{
    echo "The number $num is not palindrome";
}
}

?>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome_number checker</title>
</head>
<body>
 <form method="POST" action="task2.php">
  <label for="number">Enter the number to check  palindrome numbers:</label><br/>
  <input type="Number" required placeholder="Number" id="number" name="number">
  <input type="submit">
 </form>
 <?php
#create a form which takes the number and checks if it is palindrome or not
$num = $_POST['number'];
if(empty($num)){
    echo "Input required";
}else{
$temp = "$num";
$rev = strrev($temp);
if($temp==$rev){
  echo "The number $num is palindrome";
}else{
    echo "The number $num is not palindrome";
}
}

?>
</body>
</html>