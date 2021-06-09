<?php
    session_start();
    $Pro_ID = $_GET['item'];

    if(isset($_SESSION['cart'][$Pro_ID]))
    {
        var_dump("da ton tai");
        $_SESSION['cart'][$Pro_ID]['qty']+=1;
    }
    else
    {     
        $_SESSION['cart'][$Pro_ID]['qty']=1;
    }
    $_SESSION['success']= 'CẬp nhật mới';
    header("Location: checkout.php");
    exit();
?>