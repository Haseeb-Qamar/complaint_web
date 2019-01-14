<?php

include("conn.php");
session_start();
if (isset($_GET['dept']) && isset($_GET['content'])) {
  $dept = $_GET['dept'];
  $content = $_GET['content'];
  $get= "SELECT user FROM pending WHERE user=".$_SESSION['id']."";
  $received = $conn->query($get);
  if ($received == TRUE) {
    if ($received -> num_rows > 2) {
      echo $received -> num_rows;
      header("Location:user_pending.php?code=2");
    } else {
      $date = date('Y-m-d H:i:s');
      $sql = "INSERT INTO pending (user, dept, content, pdate) VALUES('".$_SESSION['id']."','$dept', '$content', '$date')";
      $result = $conn->query($sql);
      if ($result == TRUE) {
        header("Location:user_pending.php");
      }
      else {
        header("Location:dashboard.php?code=1");
        echo "ERROR: " .$conn->error;
      }
    }
  }
}

 ?>
