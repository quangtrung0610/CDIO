<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'cdio';

    $conn = mysqli_connect($server, $username, $password, $database);

    if($conn->connect_error){
        die("Conn error".$conn->connect_error);
    }/*else{
        echo "<script>alert('Database connect success')</script>";
    }*/
?>