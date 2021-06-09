<?php
// hàm `session_id()` sẽ trả về giá trị SESSION_ID (tên file session do Web Server tự động tạo)
// - Nếu trả về Rỗng hoặc NULL => chưa có file Session tồn tại
if (session_id() === '') {
    // Yêu cầu Web Server tạo file Session để lưu trữ giá trị tương ứng với CLIENT (Web Browser đang gởi Request)
    session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NenTang.vn</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/owl.css">

    <style>
        .homepage-slider-img {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main role="main" class="mb-2">
        <!-- Block content -->
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

        <!-- Carousel - Slider -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/php/myhand/assets/frontend/img/slider-1.jpg" class="img-fluid homepage-slider-img" />
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Nền Tảng - Nơi mua sắm tuyệt vời</h1>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/php/myhand/assets/frontend/img/slider-2.jpg" class="img-fluid homepage-slider-img" />
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Hàng triệu sản phẩm - Lựa chọn mỏi tay</h1>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/php/myhand/assets/frontend/img/slider-3.jpg" class="img-fluid homepage-slider-img" />
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Chất lượng là Hàng đầu.</h1>

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Tính năng Marketing -->
        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="/php/myhand/assets/frontend/img/icon-1.png" />
                    <h2>Đặt hàng</h2>
                    <p>Chọn sản phẩm bạn yêu thích, và Đặt hàng.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 text-center">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="/php/myhand/assets/frontend/img/icon-2.png" />
                    <h2>Tạo đơn hàng</h2>
                    <p>Theo dõi đơn hàng của bạn.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 text-center">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="/php/myhand/assets/frontend/img/icon-3.png" />
                    <h2>Giao hàng</h2>
                    <p>Giao hàng tận nơi.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Đặt hàng, Tạo đơn hàng, Giao hàng <span class="text-muted">Nhanh chóng</span>
                    </h2>
                    <p class="lead">Nơi mua sắm tuyệt vời cho mọi lứa tuổi.</p>
                </div>
                <div class="col-md-5">
                    <img src="/php/myhand/assets/frontend/img/marketing-1.png" class="img-fluid" />
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Báo cáo Doanh thu tuyệt vời <span class="text-muted">Theo dõi đơn hàng của
                            bạn.</span></h2>
                    <p class="lead">Hệ thống theo dõi đơn hàng chi tiết, thông tin mọi lúc mọi nơi.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="/php/myhand/assets/frontend/img/marketing-2.png" class="img-fluid" />
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider slider-nav slider-new-sanphams">

                    </div>
                </div>
            </div>
        </div>

        <!-- Danh sách sản phẩm -->
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Danh sách Sản phẩm</h1>
                <p class="lead text-muted">Các sản phẩm với chất lượng, uy tín, cam kết từ nhà Sản xuất, phân phối và bảo hành
                    chính hãng.</p>
            </div>
        </section>

        <!-- Giải thuật duyệt và render Danh sách sản phẩm theo dòng, cột của Bootstrap -->
        <div class="sanphams py-5 bg-light">
            <div class="container">
                <div class="row row-cols-3">
                    <?php foreach ($dataDanhSachSanPham as $row) : ?>
                        <div class="col">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon red">MỚI</div>
                                    </div>

                                    <!-- Nếu có hình sản phẩm thì hiển thị -->
                                    <?php if (!empty($row['Pro_Name'])) : ?>
                                        <div class="container-img">
                                            <a href="./product-details.php?Pro_ID=<?= $row['Pro_ID'] ?>">
                                                <img src="<?php $row['Pro_Img'] ?>" alt="">
                                            </a>
                                        </div>
                                        <!-- Nếu không có hình sản phẩm thì hiển thị ảnh mặc định -->
                                    <?php else : ?>
                                        <div class="container-img">
                                        <a href="./product-details.php?Pro_ID=<?= $row['Pro_ID'] ?>">
                                                <img class="bd-placeholder-img card-img-top img-fluid" width="100%" height="350" src="/php/myhand/assets/shared/img/default-image_600.png" />
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                <a href="./product-details.php?Pro_ID=<?= $row['Pro_ID'] ?>">
                                        <h5><?= $row['Pro_Name'] ?></h5>
                                    </a>
                                    <h6><?= $row['Pro_Name'] ?></h6>
                                    <p class="card-text"><?= $row['Pro_detail'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-outline-secondary" href="./product-details.php?Pro_ID=<?= $row['Pro_ID'] ?>">Xem chi tiết</a>
                                        </div>
                                        <small class="text-muted text-right">
                                            <b><?= $row['Price'] ?></b>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>

</body>

</html>