<html>
<head>
<title>Manipulation Using $REQUEST_METHOD</title>
</head>

//Self Page will be used for PHP Script.And Post Method Will Be Used For Secure.
<form method="post">
  Name:<input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}


?>
</html>
