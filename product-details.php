<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/images/male-clothes.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>trungd3pn.xyz</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "108926781423496");
        chatbox.setAttribute("attribution", "biz_inbox");
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v11.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Header -->
    <?php
    include_once('./API/header.php');
    ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/headingBack.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Welcome everyone with</h4>
                        <h2>Product Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once('./API/connect.php');
    $street = $_GET['Pro_ID'];
    $count = 1;
    printf($count);
    foreach ($conn->query("SELECT * FROM product, images") as $row) :
        if ($row['Pro_ID'] == $street && $row['img_ID'] == $street) :
            if (isset($_POST["btn_submit"])) {

                $handle = fopen("cart.txt", "a") or die("Unable to open file!");
                if (filesize('cart.txt') == 0) {
                    $Pro_Img =  $row['img_1'] . PHP_EOL;
                    fwrite($handle, $Pro_Img);
                    $Pro_Name = $row['Pro_Name'] . PHP_EOL;
                    fwrite($handle, $Pro_Name);
                    $Price = $row['Price'] . PHP_EOL;
                    fwrite($handle, $Price);
                    $Size = $_POST['Size'] . PHP_EOL;
                    fwrite($handle, $Size);
                    $Quantity = $_POST['Quantity'] . PHP_EOL;
                    fwrite($handle, $Quantity);
                    $Total = ((int)$Price * (int)$Quantity);
                    fwrite($handle, $Total);
                } else {
                    $Pro_Img =PHP_EOL . $row['img_1'] . PHP_EOL;
                    fwrite($handle, $Pro_Img);
                    $Pro_Name = $row['Pro_Name'] . PHP_EOL;
                    fwrite($handle, $Pro_Name);
                    $Price = $row['Price'] . PHP_EOL;
                    fwrite($handle, $Price);
                    $Size = $_POST['Size'] . PHP_EOL;
                    fwrite($handle, $Size);
                    $Quantity = $_POST['Quantity'] . PHP_EOL;
                    fwrite($handle, $Quantity);
                    $Total = ((int)$Price * (int)$Quantity);
                    fwrite($handle, $Total);
                }
                fclose($handle);
            }
    ?>
            <div class="products">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div>
                                <img src="<?= $row['img_1'] ?>" alt="" class="img-fluid wc-image" style="max-width: 21.8rem;">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4 col-xs-6">
                                    <div>
                                        <img src="<?= $row['img_2'] ?>" alt="" class="img-fluid">
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div>
                                        <img src="<?= $row['img_3'] ?>" alt="" class="img-fluid">
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div>
                                        <img src="<?= $row['img_4'] ?>" alt="" class="img-fluid">
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-xs-12">
                            <form action="#" method="post" class="form">
                                <h2><?= $row['Pro_Name'] ?></h2>

                                <br>

                                <p class="lead">
                                    <strong class="text-primary"><?= number_format($row['Price'], 2, ",", ",") ?> VND</strong>
                                </p>

                                <br>

                                <p class="lead" style="text-align: justify;">
                                    <?= $row['Pro_detail'] ?>
                                </p>

                                <br>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label">Size</label>
                                        <div class="form-group">
                                            <select class="form-control" name="Size">
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label class="control-label">Quantity</label>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input id="Quantity" type="int" name="Quantity" class="form-control" placeholder="1">
                                                    <script>
                                                        function myfunction() {
                                                            document.getElementById("Quantity").defaultValue = 1;
                                                        }
                                                    </script>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <button href="checkout.php" onclick="myfunction()" type="submit" class="btn btn-primary btn-block" name="btn_submit">Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <?php
        endif;
        $i++;
    endforeach; ?>

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Similar Products</h2>
                        <a href="products.php">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <?php require_once('./API/similarProducts.php'); ?>
                <?php require_once('./API/footer.php'); ?>

                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


                <!-- Additional Scripts -->
                <script src="assets/js/custom.js"></script>
                <script src="assets/js/owl.js"></script>


</body>

</html>