<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="mod_style.css">
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Language" content="en">
    <meta charset="UTF-8">
    <title>Moderator Panel</title>
</head>
<body>
    <div class="container-fluid">
       
        <div class="header">
           <div class="titlepage text-center">MODERATOR</div>
            <button class="btn btn-primary btn-sm" onclick="redirect(this.value)" value="home">
                Home
            </button>
            <button class="btn btn-primary btn-sm" onclick="redirect(this.value)" value="pending">
                Pending Requests
            </button>
            <button class="btn btn-primary btn-sm" onclick="redirect(this.value)" value="users">
                Users
            </button>
            <button class="btn btn-primary btn-sm" onclick="redirect(this.value)" value="complains">
                Complains
            </button>
        </div>
    </div>
    <div class="seperator">
        
    </div>
    <div class="container-fluid">
        <div class="displaybox">
            <div class="jumbotron">
  <h1 class="display-4">Welcome to moderator panel.</h1>
  <p class="lead">Manage the website from here.</p>
  <hr class="my-4">
  <p>Click below to see your pending requests.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="moderator.php" role="button">Pending Requests</a>
  </p>
</div>
        </div>
    </div>
    <script type="text/javascript">
    function redirect(url){
        if(url == 'home'){window.location = "mpanel.php";}
        else if(url == 'pending'){window.location = "moderator.php";}
        else if(url == 'users'){window.location = "mod_users.php";}
        else if(url == 'complains'){window.location = "mpanel.php";}
    }
    
    </script>
</body>
</html>