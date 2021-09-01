<html>
<head>
<title>Manipulation using $GET(HTTP) Method</title>
</head>
<body>
    <form method="get">
       Name:<input type="text" name="fname">
       <input type="submit">
    </form>

<?php
    $name = $_GET['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } 
    else {
        echo $name;

  }
?>
</body>
</html>
