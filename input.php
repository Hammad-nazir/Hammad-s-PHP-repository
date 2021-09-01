<?php
//Create a simple HTML form and accept the user name and display the name through PHP echo statement.
$var=$_POST['name'];
echo"<h3>Hello $var </h3>";
?>
<html>
<form method="POST">
<h1>Please Enter Your Name </h1>
<input name ="name" type="text" maxlength="20" placeholder="UserName">
<input type="submit">
</form>
</html>
