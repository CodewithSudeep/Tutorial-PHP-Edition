<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textarea</title>
    <style>
    textarea{
        width:300px;
        height:250px;
    }
    </style>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <label for="text">Give your brief introduction:</label><br/>
 <textarea  type="textarea" placeholder="NOTE: include your name,address,study and so on..." name="text" id="text"  ></textarea><br/>
 <input type="submit">
</form>
<?php
#create a form which takes the breif introduction of user and calculates the total words.
<<<<<<< HEAD
if($_SERVER['REQUEST_METHOD']=="POST"){
  $info =  $_POST['text'];
  if(empty($info)){
      echo "Please enter few lines about you..!!";
  }else{
      $wordCount = str_word_count($info);
      echo "<h3>The total numbers of words you entered is: $wordCount</h3>";
  }
}
?>
</body>
</html>
=======

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
    <form method="post">
    <textarea name="intro"></textarea>
    <input type="submit">
    
    </form>

</body>
</html>
>>>>>>> 26c01a80f69f1ee92f8c2fedc59b7aea1547a3c1
