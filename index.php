<?php include "conn.php";if(isset($_GET['code'])){$code=$_GET['code'];}else $code=0  ?>
<html>
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style></style>
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-between" style="background-color:#3E65A0;color:white;padding-bottom:0px; ">
  <a class="navbar-brand">UMT Complain Portal</a>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">

      <div class="inputfields">
<form class="" action="script_user_login.php" method="post">

  <span style="font-size:22px;">Login</span><br>
  <span class="labels text-left">User ID</span>
  <input type="text" name="user_id" value="" maxlength="11" onkeyup="input(this.value)" autocomplete="off" required><br>
  <input type="submit" class="btn btn-success btn-sm" name="" value="Submit">
</form>
      </div>
      <p id="mesg" class=""></p>
    </div>

  </div>
</div>
  </body>
  <script type="text/javascript">
    var code = <?php echo $code?>;
    window.onload = function(){
      setLayout();
    };
    function setLayout(){
      if (code == 1) {
        var msg = document.getElementById('mesg');
        msg.innerHTML = "Invalid User ID";
        msg.classList.add('text-danger');

      }

    }
    function input(x){
    console.log('pressed');
    }
  </script>
  </div>
</html>
