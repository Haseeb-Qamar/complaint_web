<?php
  session_start();
  include("conn.php");
  if (isset($_GET['code'])) {
    $code = $_GET['code'];
  }else $code = 0;
  if (!isset($_SESSION['id'])) {
  header("Location:index.php");
}
?>
<html>
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Language" content="en">
    <style></style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#3E65A0 ">
    <a class="navbar-brand" href="#">UMT Complain Portal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="community.php">Community Complaints <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">File Complain</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="user_pending.php">Complain Status</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Settings
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="script_user_logout.php">Logout</a>
            <!-- <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a> -->
          </div>
          <img class="avatar_small" src="assets/avatars/<?php echo $_SESSION['id'] ?>.jpg" alt="">
        </li>
      </ul>

    </div>
  </nav>
<div class="container">
  <div class="row">
    <div class="col-sm-12">

      <div class="complainbox text-center">
        <div class="complains">
          <div id="alert" class="alert alert-danger" style="display: none;">

          </div>
          <?php
          $sql = "SELECT * FROM pending WHERE user = '".$_SESSION['id']."'";
          $result = $conn->query($sql);
               if($result->num_rows == 0){
                   echo "<p class='alert alert-info'>No Pending Requests<br>Your pending complains will be shown here.</p>";
               }
          else  {
              echo "<table>
          <th>Dept</th>
          <th>Content</th>
          <th>Date</th>
          <th>Time</th>
          <th>Status</th>
          <th>Action</th>
          ";
          if ($result == TRUE) {
            while ($row = $result->fetch_assoc()) {
              $preview = substr($row['content'],0,45);
              echo "<tr>
              <td>".$row['dept']."</td>
              <td class='contentclass'>".$preview."</td>
              <td>".$row['pdate']."</td>
              <td>".$row['ptime']."</td>
              <td>".$row['status']."</td>
              <td><button onclick='deleteid(this.value)' value='".$row['c_id']."' style='background-color:transparent;border:none;outline:none'> <img src='assets/cancel.png'  ></button></td>
              </tr>";

            }
          }
          }
           ?>
        </div>
      </div>

    </div>

  </div>
</div>
  </body>
  <script type="text/javascript">
  var msg = document.getElementById('alert');
  var code = <?php echo $code ?>;
    window.onload = function(){
      setLayout();
    };
    function setLayout(){
      if (code == 2) {
        msg.innerHTML = "You cannot have more than 3 pending requests!";
        msg.style.display = "block";
        msg.classList.add('text-center');
      }
      var labels = document.getElementsByClassName('labels');
      for (var i = 0; i < labels.length; i++) {
        labels[i].classList.add("text-left");
      }

    }
      function deleteid(id){
          
          var confirm1 = confirm("Are you sure you want to cancel request?");
          console.log(id);
          if   (confirm1 == true){
                window.location = "script_delete.php?id=" + id;
              console.log("Clicked YES");
                }else{
                    console.log("Clicked NO");
                }
      }
  </script>
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  
</html>
