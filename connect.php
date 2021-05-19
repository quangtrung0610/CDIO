<?php
    session_start();
    $server = 'localhost';
    $username = 'admin';
    $password = '123456';
    $database = 'myServer';

    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error){
        die("Conn error".$conn->connect_error);
    }/*else{
        echo "<script>alert('Database connect success')</script>";
    }*/
?>
