<?php

include("conn.php");
session_start();
if (isset($_GET['dept']) && isset($_GET['content'])) {
  $dept = $_GET['dept'];
  $content = $_GET['content'];
  $sql = "INSERT INTO pending (user, dept, content) VALUES('".$_SESSION['id']."','$dept', '$content')";
  $result = $conn->query($sql);
  if ($result == TRUE) {
    header("Location:user_pending.php");
  }
  else {
    header("Location:dashboard.php?code=1");
    echo "ERROR: " .$conn->error;
  }
}

 ?>
