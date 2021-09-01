<html>
<head>
    <title>Manipulation using $POST METHOD</title>
</head>
<form method="post">
    Name:<input type="text" name="roll">
    <input type="submit" > 

</form>
<?php
$rollnumber=$_POST['roll'];
    if(empty($rollnumber)){
      echo "Rollnumber Field is Empty";
    }
   else{
   echo $rollnumber;
}
?>

</html>
