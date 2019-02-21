<?php
include("conn.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    
        $sql = "DELETE FROM pending WHERE c_id = $id";
        $send = $conn->query($sql);
        if($send == TRUE){
            header("Location:moderator.php");
        }else echo $conn->error;
    }else echo $conn->error;
    
    
    


?>