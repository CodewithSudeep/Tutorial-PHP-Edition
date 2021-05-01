<<<<<<< HEAD
<?php

#create and array for student and thier marks

#example: 
// $results = array("ram"=>45,"sita"=>80);
// $name = "ram";
// echo $results[$name];
#create form which takes the name of student and print their marks if it exist in array

#otherwise print "try another name"


?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
</head>
<body>
<form method="post" action="task3.php">
Name <input type="text " name="_name"><br>
<input type="submit" name="submit">
</form>
    
<?php
#create and array for student and thier marks
#example: 
// $results = array("ram"=>45,"sita"=>80);
$student_info = array("Pradip"=>"75","Shekhar"=>"79","Aarash"=>"36","Kiran"=>"69");
#create form which takes the name of student and print their marks if it exist in array
#otherwise print "try another name"

if($_SERVER['REQUEST_METHOD']=="POST"){
    $get_name =$_REQUEST['_name'];
   if(isset($student_info[$get_name])){

       echo "The marks obtained by $get_name is :$student_info[$get_name]";
   }else{
      echo "try another name"; 
   }
}


?>
</body>







>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
