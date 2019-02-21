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
            $sql = "SELECT * FROM complains";
            $result = $conn->query($sql);
            if($result->num_rows == 0){
                echo "<p class='alert alert-info'>No Complains Yet</p>";
            }else{
          echo "<table>
          <th>User</th>
          <th>Dept</th>
          <th>Content</th>
          <th>Date</th>
          <th>Time</th>
          <th>Action</th>

          ";
          if ($result == TRUE) {
            while ($row = $result->fetch_assoc()) {
              $user_ = $row['user'];
              $preview = substr($row['content'],0,45);
              echo "<tr>
              <td><img class='avatar_lists' src='assets/small/$user_.jpg' >"."</td>
              <td>".$row['dept']."</td>
              <td class='contentclass'>".$preview."</td>
              <td>".$row['pdate']."</td>
              <td>".$row['ptime']."</td>
              <td><button onclick='deleteid(this.value)' value='".$row['c_id']."' style='background-color:transparent;border:none;outline:none'> <img src='assets/cancel.png'  ></button></td>
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
        function deleteid(id){
          
          var confirm1 = confirm("Are you sure you want to delete this request?");
          console.log(id);
          if   (confirm1 == true){
                window.location = "script_mod_delete.php?id=" + id;
              console.log("Clicked YES");
                }else{
                    console.log("Clicked NO");
                }
      }
    
    </script>
</body>
</html>