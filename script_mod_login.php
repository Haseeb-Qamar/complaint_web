<?php
if(isset($_POST['code']) && isset($_POST['pwd']) ){
    $code = $_POST['code'];
    $pwd = $_POST['pwd'];
    echo $code . $pwd;
    if($code == '001' && $pwd == 'haseeb'){
        header("Location:mpanel.php");
    }else {
        echo "in else";
        header("Location:mod_login.php?code=1");
} 
}else header("Location:mod_login.php?code=1");

?>