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
            <?php 
            include("conn.php");
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            if($result->num_rows == 0){
                echo "<p class='alert alert-info'>No Users Yet</p>";
            }else{
            echo "<table>
          <th>User</th>
          <th>First Name</th>
          <th>Last Name</th>
          ";
            if ($result == TRUE) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
              <td>".$row['user_id']."</td>
              <td ><span class='users'>".$row['firstname']."<span class='userimg'><img src='assets/small/".$row['user_id'].".jpg'></span></span></td>
              <td>".$row['lastname']."</td>
              </tr>";

            }
          }
                      
            }
      
            ?>
        </div>
    </div>
    <script type="text/javascript">
    
         function redirect(url){
        if(url == 'home'){window.location = "mpanel.php";}
        else if(url == 'pending'){window.location = "moderator.php";}
        else if(url == 'users'){window.location = "mod_users.php";}
        else if(url == 'complains'){window.location = "mod_complains.php";}
    }
    
    </script>
</body>
</html>