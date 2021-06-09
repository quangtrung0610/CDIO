<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    // Hiển thị tất cả lỗi trong PHP
    // Chỉ nên hiển thị lỗi khi đang trong môi trường Phát triển (Development)
    // Không nên hiển thị lỗi trên môi trường Triển khai (Production)
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include_once('../connect.php');

    // 2. Chuẩn bị câu truy vấn $sql
    $sqlDanhSachSanPham = <<<EOT
    SELECT *
    FROM `product`
    EOT;

    // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
    $result = mysqli_query($conn, $sqlDanhSachSanPham);

    // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
    // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
    // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
    $dataDanhSachSanPham = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $dataDanhSachSanPham[] = array(
            'Pro_ID' => $row['Pro_ID'],
            'Pro_Name' => $row['Pro_Name'],
            'Amount' => $row['Amount'],
            'Size' => $row['Size'],
            'Price' => $row['Price'],
            'Brand_ID' => $row['Brand_ID'],
            'Pro_Img' => $row['Pro_Img'],
            'Pro_detail' => $row['Pro_detail'],
        );
    }

?>
<?php foreach($conn->query("SELECT * FROM product ") as $row) : ?>
<div class="col-md-4">
    <div class="product-item">
        <a href="product-details.php"><img src="'.$row['Pro_Img'].'" alt=""></a>
        <div class="down-content">
            <a href="product-details.php">
                <h4><?php $row['Pro_Name']?></h4>
            </a>
            <h6></small>'.$row['Price'].' VND</h6>
            <p>'.$row['Pro_detail'].'</p>
        </div>
    </div>
</div>
<?php endforeach; ?>
</body>
</html>