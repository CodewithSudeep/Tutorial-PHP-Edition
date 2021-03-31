<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <label>Student Name:</label>
    <input type="text" name="sname"> <br> <br>
    <input type="submit" name="submit"> <br> <br> 
    </form>
</body>
</html>

<?php

#create and array for student and thier marks

#example: 
// $results = array("ram"=>45,"sita"=>80);

#create form which takes the name of student and print their marks if it exist in array

#otherwise print "try another name"

$results = array("Sisam" => 45, "Sarita" => 55, "Pratap" => 65, "Susan" => 75);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit'])){
        $name = $_POST['sname'];
        if($results[$name]){
            echo "Marks obtained by $name is : ", $results[$name];
        }
        else{
            echo"Try another name";
        }
    }
}

?>