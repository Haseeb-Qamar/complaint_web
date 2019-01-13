<?php
session_start();
include("conn.php");
if (isset($_POST['pwd'])) {
  $pwd = $_POST['pwd'];
  $sql = "SELECT user_id, password FROM users WHERE password = '$pwd' && user_id = '".$_SESSION['id']."'";
  $result = $conn->query($sql);
  if ($result == TRUE) {
    if ($result->num_rows == 1) {
      $_SESSION['verified'] = 1;
      header("Location:dashboard.php");
    }else {
      header("Location:verify.php?code=1");
    }
  }else echo "ERROR: " .$conn->error;
}

 ?>
