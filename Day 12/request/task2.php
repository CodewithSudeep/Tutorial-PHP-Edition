<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  First Name: <input type="text" name="fname">
  Last Name: <input type="text" name="lname">

  <input type="submit">
</form>

<?php

#check if request method is post

# get the value of first name

#get the value of last name

#print first name and last name
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo " first Name is empty";
  } else {
    echo " first name is $name";
    $name = $_REQUEST['lname'];
  }
    if (empty($name)) {
      echo " <br/> last Name is empty";
    }
     else {
      echo "<br/> last name is $name";
      

  }
}

?>

</body>
</html>