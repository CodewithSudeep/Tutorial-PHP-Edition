<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name:<input type="text" name="name">
    <input type="submit"> 
</form>
<?php

#create and array for student and thier marks

#example: 
// $results = array("ram"=>45,"sita"=>80);

#create form which takes the name of student and print their marks if it exist in array

#otherwise print "try another name"
$result=array("ram"=>45,"sita"=>80,"shyam"=>"98","gita"=>"23");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $array_name=$_POST["name"];
    if(isset($result[$array_name]))
    {
        echo $result[$array_name];
    }
    else
    {
        echo "Try othername";
    }
}
?>
</body>
</html>
