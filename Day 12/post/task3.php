<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
</head>
<body>
<form method="POST" action="task3.php">
  <label for="stdname">Enter a name:</label>
  <input type="text" id="stdname" name="stdname">
  <input type="submit" name="submit">
</form>
    
<?php
#create and array for student and thier marks
#example: 
// $results = array("ram"=>45,"sita"=>80);
<<<<<<< HEAD
=======
// $name = "ram";
// echo $results[$name];
>>>>>>> 26c01a80f69f1ee92f8c2fedc59b7aea1547a3c1
#create form which takes the name of student and print their marks if it exist in array
#otherwise print "try another name"
$results =array("Bibek"=>70,"Jiten"=>90,"Sakshyam"=>60,"Sudip"=>65,"Raj"=>25);
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name =$_POST['stdname'];
   if(isset($results[$name])){
       echo "The marks obtained by $name is :$results[$name]";
   }else{
      echo "Try another name"; 
   }
}


?>
</body>
</html>
