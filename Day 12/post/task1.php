<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
    <style>
    textarea{
        width:300px;
        height:250px;
    }
    </style>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <label for="text"> please input some txt:</label><br/>
 <textarea  type="textarea" placeholder="NOTE: include your name,address,study and so on..." name="text" id="text"  ></textarea><br/>
 <input type="submit">
</form>
<?php
#create a form which takes the breif introduction of user and calculates the total words.
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