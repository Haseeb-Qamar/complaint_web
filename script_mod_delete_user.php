<?php

include("conn.php");
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id =$id";
    $result = $conn->query($sql);
    if($result == TRUE){
        header("Location:mod_users.php");
    }else{
        echo $conn->error;
    }
}

?>