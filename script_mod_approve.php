<?php
include("conn.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $fetch_data = "SELECT * FROM pending WHERE c_id = $id";
    $data_receive = $conn->query($fetch_data);
    if($data_receive == TRUE){
        $data = $data_receive->fetch_row();
        $id = $data[0];
        $user = $data[1];
        $dept = $data[2];
        $content = $data[3];
        $date = $data[5];
        $time = $data[6];
    $sql = "INSERT INTO complains(user, dept, content, pdate, ptime) VALUES('$user','$dept','$content','$date','$time')";
    $result = $conn->query($sql);
    if($result == TRUE){
        $sql = "DELETE FROM pending WHERE c_id = $id";
        $send = $conn->query($sql);
        if($send == TRUE){
            header("Location:moderator.php");
        }else echo $conn->error;
    }else echo $conn->error;
    }else echo $conn->error;
    
    
}

?>