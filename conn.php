<?php

$conn = new mysqli('localhost', 'haseeb', 'haseeb' ,'umt_c');
if ($conn-> connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
?>
