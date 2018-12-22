<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="./Resources/background.css">

<h1>Thank You!</h1>

<?php
  $first = htmlspecialchars($_POST["firstname"]);
  $last  = htmlspecialchars($_POST["lastname"]);
  echo "Thank you ",$first, " ", $last, " for joining our mailing list! (No spam, we promise =D)";
?>

<br></br>
<a href="./index.php">Return to Homepage</a>

</html>
