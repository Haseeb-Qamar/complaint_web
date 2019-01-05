<html>
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
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
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">File Complain</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Complain Status</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Settings
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Logout</a>
            <!-- <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a> -->
          </div>
        </li>
      </ul>

    </div>
  </nav>
<div class="container">
  <div class="row">
    <div class="col-sm-12">

      <div class="complainbox">
        <div class="fields">
            Concerned Department:<br>
            <input type="radio" name="" value="">
            <span class="fieldLables">Accounts</span>
            <input type="radio" name="" value="">
            <span class="fieldLables">Registarar</span>
            <input type="radio" name="" value="">
            <span class="fieldLables">Faculty</span>
            <span class="labels">Reason</span>
            <textarea name="name" rows="4" cols="30"></textarea><br>
            <input id="submitbtn" type="submit" class="btn btn-success btn-sm" name="" value="Submit">
        </div>
      </div>

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
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </div>
</html>
