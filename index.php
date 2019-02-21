<?php
include "conn.php";
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
  <body id="body">

    <nav class="navbar navbar-light justify-content-between" style="background-color:#3E65A0;color:white;padding-bottom:0px; ">
  <a class="navbar-brand">UMT Complain Portal</a>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">

      <div class="inputfields">
        <div id="mesg" class="alert alert-danger" style="display:none">

        </div>
<form class="" action="script_user_login.php" method="post">

  <span style="font-size:22px;">Login</span><br>
  <span class="labels text-left">User ID</span>
  <input type="text" id="field" name="user_id" value="" maxlength="11" onkeyup="input(this.value)" autocomplete="off" required><br>
  <input type="submit" class="btn btn-success btn-sm" name="" value="Submit">
</form>
      </div>

    </div>

  </div>


    <p class="footer" id="footer">System is being deployed. Errors are expected.</p>

</div>
 
  </body>
  <script type="text/javascript">
    var code = <?php echo $code?>;
    var body = document.getElementById('body');
    var ori_height = window.getComputedStyle(body);
    var height3 =ori_height.getPropertyValue('height');
    var height = 0;
    setInterval(function(){checkheight()},10);
    window.onload = function(){
      height = screen.height;
      document.getElementById('field').focus();
      setLayout();
    };
    function setLayout(){
      if (code == 1) {
        var msg = document.getElementById('mesg');
        msg.style.display= "block";
        msg.innerHTML = "Invalid User ID";
        msg.classList.add('text-danger');

      }

    }
    function input(x){
    console.log('pressed');
    }
    function checkheight(){


      var style = window.getComputedStyle(body);
      var height2 =style.getPropertyValue('height');


      if (height2 != height3) {
         document.getElementById('footer').style.display = "none";
      }else{
         document.getElementById('footer').style.display = "block";
      }
    }
  </script>
</html>
