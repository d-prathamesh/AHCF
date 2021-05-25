<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ahcf";

$e_title = $_REQUEST['e_title'];
$e_poster = $_REQUEST['e_poster'];
$e_des = $_REQUEST['e_des'];
$e_date = $_REQUEST['e_date'];
$e_time = $_REQUEST['e_time'];
$e_mode = $_REQUEST['e_mode'];
$e_venue = $_REQUEST['e_venue'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO events (e_title, e_poster, e_des, e_date, e_time, e_mode, e_venue)
VALUES ('$e_title', '$e_poster', '$e_des', '$e_date' , '$e_time', '$e_mode' , '$e_venue')";

if ($conn->query($sql) === TRUE) {
  echo "Admin added sucessfully ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>