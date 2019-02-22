<?php
include("conn.php");
if(isset($_POST['uid']) && isset($_POST['fn']) && isset($_POST['ln']) && isset($_POST['pwd']) ){
    $id = $_POST['uid'] ;
    $fn = $_POST['fn'] ;
    $ln = $_POST['ln'] ;
    $pwd = $_POST['pwd'] ;
    $result = $conn -> query("INSERT INTO users(user_id, firstname, lastname, password, avatar) VALUES('$id','$fn','$ln','$pwd','none')");
    if($result == TRUE){
        header("Location:mod_users.php");
        
    }else echo $conn->error;
}
?>