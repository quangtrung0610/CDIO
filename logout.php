<?php
    session_start();
    if(session_destroy()){
        unlink("cart.txt");
        header("Location: index.php");
    }
?>