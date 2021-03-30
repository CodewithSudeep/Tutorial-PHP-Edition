<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
</head>
<body>
<form method="POST" action="task3.php">
  <label for="studentname">Enter your name:</label>
  <input type="text" id="studentname" name="studentname">
  <input type="submit" name="submit">
</form>
    
<?php
#create and array for student and thier marks
#example: 
// $results = array("ram"=>45,"sita"=>80);
#create form which takes the name of student and print their marks if it exist in array
#otherwise print "try another name"



$results =array("saksham"=>60,"saks"=>83,"bibek"=>90,"jhus"=>99,"boks"=>90);
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name =$_POST['studentname'];
   if(isset($results[$name])){
       echo "The marks obtained by $name is :$results[$name]";
   }else{
      echo "something went wrong Try again"; 
   }
}


?>
</body>
</html>