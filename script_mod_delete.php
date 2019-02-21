<?php

include("conn.php");
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql = "DELETE FROM complains WHERE c_id =$id";
    $result = $conn->query($sql);
    if($result == TRUE){
        header("Location:mod_complains.php");
    }else{
        echo $conn->error;
    }
}

?>