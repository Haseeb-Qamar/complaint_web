<?php

include("conn.php");
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql = "DELETE FROM pending WHERE c_id =$id";
    $result = $conn->query($sql);
    if($result == TRUE){
        header("Location:user_pending.php");
    }else{
        echo $conn->error;
    }
}

?>