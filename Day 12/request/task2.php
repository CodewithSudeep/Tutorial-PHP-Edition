<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  First Name: <input type="text" name="fname">
  Last Name: <input type="text" name="lname">

  <input type="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo " <br/>  the first name is empty";
  }
  else{
    echo " <br/>  first name is $name";
  }
$name=$_REQUEST["lname"];
if (empty($name)){
  echo " <br/> the last name is empty";
}
else{
  echo " <br/>  the last name is $name";
}
}

#check if request method is post

# get the value of first name

#get the value of last name

#print first name and last name

?>

</body>
</html>