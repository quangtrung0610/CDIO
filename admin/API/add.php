<?php
session_start();
?>
<?php
require_once("connect.php");

if (isset($_POST['Save'])) {
    $product_name = $_POST["product_name"];
    $amount = $_POST["amount"];
    $size = $_POST["size"];
    $price = $_POST["price"];
    $brand_id = $_POST["brand_id"];
    $product_detail = $_POST["product_detail"];
    $type = $_POST["type"];
    $filebutton1 = $_POST["filebutton1"];
    
    
    


    $sql1 = "INSERT INTO images(img_1,img_2,img_3,img_4) 
        VALUES ('$filebutton1',
        '$filebutton2',
        '$filebutton3',
        '$filebutton4')";
    $result = mysqli_query($conn, $sql1) or die("thêm thất bại " . mysqli_error($conn));
    $maxid = mysqli_query($conn, "SELECT max(img_ID) FROM images");
    $imgid = mysqli_fetch_array($maxid);

    $Pro_ID = $imgid['max(img_ID)'];
    $sql = "INSERT INTO product(Pro_ID, Pro_Name , Amount , Size , Price , Brand_ID , Pro_Img ,img_ID, Pro_detail , Type) 
        VALUES ('$Pro_ID',
                '$product_name',
                '$amount',
                '$size',
                '$price',
                '$brand_id',
                '$filebutton1',
                '$Pro_ID',
                '$product_detail',
                '$type')";
    if ($result == true) {
        mysqli_query($conn, $sql) or die("thêm thất bại " . mysqli_error($conn));
    }
}
header("location:../ARU.php");
?>