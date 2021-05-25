<?php

// Create connection
$conn = mysqli_connect('localhost' , 'root' , '' , 'ahcf');

// Check connection
if (!$conn) {
  die("Connection failed: " .mysqli_error());
}

?>
