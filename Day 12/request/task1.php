<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php

#DEBUG

<<<<<<< HEAD
if ($SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $REQUEST['fname'];
=======
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>