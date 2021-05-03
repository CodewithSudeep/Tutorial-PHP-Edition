<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  First Name: <input type="text" name="fname"><br>
  Last Name: <input type="text" name="lname">
<br>
  <input type="submit" name="submit">
</form>

<?php

#check if request method is post
if($_SERVER["REQUEST_METHOD"]=='POST'){
# get the value of first name
$_firstname=$_REQUEST['fname'];
#get the value of last name
 $_lastname=$_REQUEST['lname'];
$_firstname.=$_lastname;
if(empty($_firstname)){
  echo "You entered nothing";
}else{
  echo $_firstname;
}
}

#print first name and last name

?>

</body>

</html>
