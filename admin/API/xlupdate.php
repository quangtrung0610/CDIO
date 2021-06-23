<?php
require_once("connect.php");
if (isset($_POST['update'])) {
    $Pro_ID = $_POST['Pro_ID'];
    $img_ID = $_POST['img_ID'];
    $product_name = $_POST["product_name"];
    $amount = $_POST["amount"];
    $size = $_POST["size"];
    $price = $_POST["price"];
    $brand_id = $_POST["brand_id"];
    $product_detail = $_POST["product_detail"];
    $type = $_POST["type"];
    $img1 = $_POST["img_1"];
    $img2 = $_POST["img_2"];
    $img3 = $_POST["img_3"];
    $img4 = $_POST["img_4"];
    $sql = "UPDATE images SET 
        img_ID=$img_ID, 
        img_1='$img1',
        img_2='$img2',
        img_3='$img3',
        img_4='$img4'  
    WHERE img_ID='$img_ID'";
    mysqli_query($conn, $sql) or die("update thất bại" . mysqli_error($conn));
    $sql1 = "UPDATE product set 
        Pro_ID=$Pro_ID,
        Pro_Name='$product_name',
        Amount=$amount,
        Size='$size',
        Price=$price,
        Brand_ID=$brand_id,
        Pro_Img= '$img1',
        img_ID=$img_ID,
        Pro_detail='$product_detail',
        Type='$type'
        WHERE Pro_ID='$Pro_ID'";
    mysqli_query($conn, $sql1) or die("update thất bại" . mysqli_error($conn));
    header("location:select.php");
}
