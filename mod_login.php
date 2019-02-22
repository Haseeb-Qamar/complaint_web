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
        <div class="displaybox">
           <div class="text-center">
               <span class="titlepage">Moderator Login </span>
               <div class="seperator"></div>
               <div class="loginfields">
                   <span class="">Moderator Code</span>
                     <br>
                     <form action="script_mod_login.php" method="post">
                   <input type="text" name="code" id="" required><br>
                   Moderator Password <br>
                   <input type="password" name="pwd" required>
                   <input type="submit" class="btn btn-default btn-sm" name="" id="submitbtn" value="Login">      
                     </form>
                   
               </div>
           </div>
        </div>
    </div>
    <script type="text/javascript">
    
        
    </script>
</body>
</html>