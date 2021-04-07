<html>
<body>



<?php

#DEBUG

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>