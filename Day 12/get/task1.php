<html>
<body>

<<<<<<< HEAD
<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
=======

>>>>>>> b218067becdcb46c38497d185e0632c5c188c1ab

<?php

#DEBUG

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
<<<<<<< HEAD
  $name = $_REQUEST['fname'];
=======
  $name = $_REQUEST['refrercode'];
>>>>>>> b218067becdcb46c38497d185e0632c5c188c1ab
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
  
}
var_dump($_SERVER);
?>

</body>
</html>