<?php

include "conn.php";
if (isset($_POST['fn']) && isset($_POST['ln'] ) && isset($_POST['email']) && isset($_POST['pwd']) ) {
  $fn=$_POST['fn'];
  $ln=$_POST['ln'];
  $pwd=$_POST['pwd'];
  $email=$_POST['email'];
$query = "INSERT INTO user (firstname, lastname, password, email) VALUES('$fn', '$ln', '$pwd', '$email');";
if ($conn -> query($query) === TRUE) {
  // code...
} else echo "Error: " .$conn->error ;
}
?>
