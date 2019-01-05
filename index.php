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
  <form class="form-inline" action="dashboard.php">
    <span id="bar" style="margin-right:10px;">Login</span>
    <input type="text" name="" value="" placeholder="User Name" style="margin-right:10px;">
    <input type="text" name="" value="" placeholder="Password" style="margin-right:10px;">
    <input type="submit" class="btn btn-success btn-sm" name="" value="Login">

  </form>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">

      <div class="inputfields">
        <span style="font-size:22px;">Sign Up</span><br>
          <span class="labels">First Name</span>
          <input type="text" name="" value="">
          <span class="labels">Last Name</span>
          <input type="text" name="" value="">
          <span class="labels">Email</span>
          <input type="text" name="" value="">
          <span class="labels">Password</span>
          <input type="text" name="" value=""><br>
          <input type="submit" class="btn btn-success btn-sm" name="" value="Sign-Up">
      </div>
      <p id="mesg"></p>
    </div>

  </div>
</div>
  </body>
  <script type="text/javascript">
    window.onload = function(){
      setLayout();
    };
    function setLayout(){
      var labels = document.getElementsByClassName('labels');
      for (var i = 0; i < labels.length; i++) {
        labels[i].classList.add("text-left");
      }

    }
  </script>
  </div>
</html>
