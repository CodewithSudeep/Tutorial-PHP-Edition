
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
Introduction: <input type="text" name="intro"><br>
<input type="submit" name="submit">
</form>

<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
     if(isset($_POST['submit'])){
         $intro=$_REQUEST['intro'];
         $word_length=str_word_count($intro);
         echo "<br>Total no of words in entered paragraph is: ",$word_length;
     }
 }
#create a form which takes the breif introduction of user and calculates the total words.

?> 
</body>
</html>

