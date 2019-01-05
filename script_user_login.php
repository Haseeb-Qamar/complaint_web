<?php

include "conn.php";
if (isset($_POST['user_id'])) {
  $email=$_POST['user_id'];
  $query = "SELECT user_id FROM users WHERE user_id='$email'";
  echo $query;
  $result = $conn -> query($query);
  if ($result == TRUE) {
    if ($result->num_rows == 1) {
      session_start();
      $sql = "SELECT firstname FROM users WHERE user_id = '$email'";
      $result = $conn->query($sql);
      if ($result == TRUE) {
        $returned = $result->fetch_assoc();
        $name = $returned['firstname'];
        echo $name;
      } else echo "Error: " .$conn->error ;
      $_SESSION['id'] = $email;
      $_SESSION['name'] = $name;
      header("Location:verify.php?id=".$email."");
    }else header("Location:index.php?code=1");
} else echo "Error: " .$conn->error ;
}
?>
