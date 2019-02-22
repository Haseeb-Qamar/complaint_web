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
          <th>Action</th>
          ";
            if ($result == TRUE) {
            while ($row = $result->fetch_assoc()) {
                $userid = $row['user_id'];
              
              echo "<tr>
              <td>".$row['user_id']."</td>
              
              <td ><span class='users'>".$row['firstname'];
              
              if(file_exists("assets/small/$userid.jpg")){
                  echo "<span class='userimg'><img src='assets/small/".$row['user_id'].".jpg'></span></span></td>";
              } else {
              echo "<span class='userimg'><img src='assets/small/default.jpg'></span></span></td>";    
              }
              
              
              
              echo "<td>".$row['lastname']."</td>
              <td><button onclick='deleteid(this.value)' value='".$row['user_id']."' style='background-color:transparent;border:none;outline:none'> <img src='assets/cancel.png'  ></button></td>
              </tr>";

            }
          echo "</table>";
            }
                      
            }
      
            ?>
        
        </div>
        <div class="addbtn">
            <button onclick="displaydialog()" class="btn btn-success btn-sm">Add User</button>
        </div>
        <div id="myd" class="addDialog">
           <form action="script_mod_adduser.php" method="post">
            <div class="dialog">
               <div class="text-center">Add User Details</div>
                <span class="labels">User ID</span> <br>
                <input type="text" maxlength="11" name="uid" id=""><br>
                <span class="labels">First Name</span> <br>
                <input type="text" name="fn" id=""><br>
                <span class="labels">Last Name</span><br>
                <input type="text" name="ln" id=""><br>
                <span class="labels">Password</span> <br>
                <input type="text" name="pwd" id=""><br>
                <input class="btn btn-default btn-sm" type="submit" value="Add User">
            <span onclick="closebox()" id="close" class="closebox">&times;</span>
            </div>    
           </form>
           
            
        </div>
    </div>
    <script type="text/javascript">
    
         function redirect(url){
        if(url == 'home'){window.location = "mpanel.php";}
        else if(url == 'pending'){window.location = "moderator.php";}
        else if(url == 'users'){window.location = "mod_users.php";}
        else if(url == 'complains'){window.location = "mod_complains.php";}
    }
    function displaydialog(){
        var mydialog = document.getElementById('myd');
        mydialog.style.display = "block";
    }
    function closebox(){
        var mydialog = document.getElementById('myd');
        mydialog.style.display= "none";
    }
         function deleteid(id){
          
          var confirm1 = confirm("Are you sure you want to delete this user?");
          console.log(id);
          if   (confirm1 == true){
                window.location = "script_mod_delete_user.php?id=" + id;
              console.log("Clicked YES");
                }else{
                    console.log("Clicked NO");
                }
      }
        
    </script>
</body>
</html>