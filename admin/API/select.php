<?php 
require_once("connect.php");

$sql = "SELECT * FROM product";
$link = mysqli_query($conn, $sql);
if(!$link){
    die("không thể truy vấn" .mysqli_error($con));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Danh sách Product</h1>
    <h2><a href="./ARU.php">Add</a></h2>
    <a href="./index.php">Home</a>
    <table border=2>
        <thead>
            <tr>
                <td>Pro_ID</td>
                <td>Pro_Name</td>
                <td>Amount</td>
                <td>Size</td>
                <td>Price</td>
                <td>Brand_ID</td>
                <td>Pro_Img</td>
                <td>Pro_detail</td>
                <td>img_ID</td>
                <td>Type</td>
                <td colspan="3">Action</td>
            </tr>
        </thead>    
            <tbody>
                <?php
                if(mysqli_num_rows($link)>0){
                    while($row = mysqli_fetch_assoc($link)) {
                ?>
                <tr>
                    <td> <?php echo $row['Pro_ID']?></td>
                    <td> <?php echo $row['Pro_Name']?></td>
                    <td> <?php echo $row['Amount']?></td>
                    <td> <?php echo $row['Size']?></td>
                    <td> <?php echo $row['Price']?></td>
                    <td> <?php echo $row['Brand_ID']?></td>
                    <td> <?php echo $row['Pro_Img']?></td>
                    <td> <?php echo $row['Pro_detail']?></td>
                    <td> <?php echo $row['img_ID']?></td>
                    <td> <?php echo $row['Type']?></td>
                    <td><a href="delete.php?img_ID=<?php echo $row['img_ID']?>&Pro_ID=<?php echo $row['Pro_ID'];?>">Xóa</a></td>
                    <td><a href="update.php?img_ID=<?php echo $row['img_ID']?>&Pro_ID=<?php echo $row['Pro_ID'];?>">Sửa</a></td>
                    
                </tr>
                
                <?php 
                }
            }
                ?>
            </tbody>
    </table>
</body>
</html>