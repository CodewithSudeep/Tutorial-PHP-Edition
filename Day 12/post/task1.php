<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <p>Your Brief Introduction:</p> 
    <textarea name="intro" cols="30" rows="10"></textarea> <br><br>
    <input type="submit" name="submit"> <br> <br>
    </form>
</body>
</html>

<?php


#create a form which takes the breif introduction of user and calculates the total words.
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['intro'])){
        $details = $_POST['intro'];
        $count = str_word_count($details);
         echo "Total Number of words is :", $count;
        
    }
}

?>