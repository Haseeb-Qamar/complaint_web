<?php include "conn.php";
  session_start();
  if (!isset($_SESSION['id'])) {
  header("Location:index.php");
}
  if(isset($_GET['code'])){
    $code=$_GET['code'];
  }else $code=0
?>
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

      <div class="passwordfield">
        <div id="mesg" class="alert alert-danger" style="display:none">

        </div>
<form class="" action="script_user_verification.php" method="post">

  <span style="font-size:22px;">Welcome <?php echo $_SESSION['name'] ?> </span><br>
  <img class="avatars" src="assets/avatars/<?php echo $_SESSION['id']; ?>.jpg" alt="">
  <div class="mydiv">
    <span class="labels text-left">Password</span>
    <input type="password" id="field" name="pwd" value="" required><br>
  </div>
  <input type="submit" class="btn btn-success btn-sm" name="" value="Submit">
</form>
      </div>
      <p id="mesg"></p>
    </div>

  </div>
</div>
  </body>
  <script type="text/javascript">
  var code = <?php echo $code?>;
    window.onload = function(){
      document.getElementById('field').focus();
      setLayout();
    };
    function setLayout(){
      if (code == 1) {
        var msg = document.getElementById('mesg');
        msg.style.display= "block";
        msg.innerHTML = "Invalid Password";
        msg.classList.add('text-danger');

      }

    }
    function input(x){
    console.log('pressed');
    }
  </script>
  
</html>
