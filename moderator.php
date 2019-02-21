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
            $sql = "SELECT * FROM pending";
            $result = $conn->query($sql);
            if($result->num_rows == 0){
                echo "<p class='alert alert-info'>No Complaint Requests Yet<br>Complain requests will be shown here.</p>";
            }else{
            echo "<table>
          <th>Dept</th>
          <th>User</th>
          <th>Content</th>
          <th>Date</th>
          <th>Time</th>
    
          <th class='text-center'>Action</th>
          ";
            if ($result == TRUE) {
            while ($row = $result->fetch_assoc()) {
              $preview = substr($row['content'],0,45);
              echo "<tr>
              <td>".$row['dept']."</td>
              <td ><span class='users'>".$row['user']."<span class='userimg'><img src='assets/small/".$row['user'].".jpg'></span></span></td>
              <td class='contentclass'>".$preview."</td>
              <td>".$row['pdate']."</td>
              <td>".$row['ptime']."</td>
              <td class='mybtn text-center'><span class='users'><button onclick='approvereq(this.value)' value='".$row['c_id']."' style='background-color:transparent;border:none;outline:none'> <img src='assets/approve.png'  ></button><button onclick='rejectreq(this.value)' value='".$row['c_id']."' style='background-color:transparent;border:none;outline:none'> <img src='assets/cancel.png'  ></button></span></td>
              </tr>";

            }
          }
                      
            }
      
            ?>
        </div>
    </div>
    <script type="text/javascript">
    function approvereq(id){
        var confirmation = confirm("Approve Request?");
        if(confirmation == true){
           window.location = "script_mod_approve.php?id=" + id;
           }
    }
    function rejectreq(id){
        var confirmation = confirm("Reject Request?");
        if(confirmation = true){
           window.location= "script_mod_reject.php?id=" + id;
           }
    }
         function redirect(url){
        if(url == 'home'){window.location = "mpanel.php";}
        else if(url == 'pending'){window.location = "moderator.php";}
        else if(url == 'users'){window.location = "mod_users.php";}
        else if(url == 'complains'){window.location = "mod_complains.php";}
    }
    
    </script>
</body>
</html>