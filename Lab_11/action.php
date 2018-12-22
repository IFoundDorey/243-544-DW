<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../Resources/background.css">

<h1>Processing...</h1>

<?php
  $led = htmlspecialchars($_POST["led"]);
  if($led=="ON"){
    `sudo python /var/www/html/243-544-DW/Lab_11/simple.py ON `;
    echo "Turning the LED ON";
  }
  elseif($led=="OFF"){
    `sudo python simple.py OFF `;
    echo "Turning the LED OFF";
  }
?> </html>
