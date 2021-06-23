<?php
require_once("connect.php");
$id = $_GET['Pro_ID'];
$img_ID=$_GET['img_ID'];
$sql = "DELETE FROM product WHERE Pro_ID= $id";
if(!mysqli_query($conn , $sql)){
    die("Thao thác không thành công ".mysqli_error($conn));
}
$sql = "DELETE FROM images WHERE img_ID= $img_ID";
if(!mysqli_query($conn , $sql)){
    die("Thao thác không thành công ".mysqli_error($conn));
}
header("Location:index.php"); 
?>