<?php
    require_once('connect.php');
    if(isset($_POST["btn_submit"])){
        $Pro_Img = $_POST['Pro_Img'];
        $Pro_Name = $_POST['Pro_Name'];
        $Price = $_POST['Price'];
        $Quantity = $_POST['Quantity'];
        $Size = $_POST['Size'];
        $Total = $Price * $Quantity;

        $sql = "SELECT Pro_Img, Pro_Name, Price INTO cart(Pro_Img, Pro_Name, Price, Quantity, Size, Total) 
            VALUE ('$Pro_Img', '$Pro_Name', '$Price', '$Quantity', '$Size', '$Total')";
        mysqli_query($conn, $sql);

        $cart = $_SESSION('cart');
    }
?>