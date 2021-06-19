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
    require('./API/header.php');
    ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/headingBack.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Welcome everyone with</h4>
                        <h2>CART</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Shoppingcart-->
    </br>
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <div class="heading">
                    <h2>SHOPPING CART</h2>
                </div>
                <table class="table table-hover" style="text-align:center;">
                    <?php 
                    if(isset($_SESSION["cart_item"])):
                        $total_quantity = 0;
                        $total_price = 0;
                    ?>
                    <thead>
                        <tr>
                            <th>Img</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($_SESSION["cart_item"] as $item):
                        $item_price = $item["Quantity"]*$item["Price"];
                        $total_quantity += $item["Quantity"];
				        $total_price += $item_price;
                    ?>
                    <tbody id="datarow">
                        <?php
                        require_once('./API/connect.php');
                            //$handle = fopen("cart.txt", "r") or die("Unable to open file!");
                            $i = 1;
                        ?>
                        <tr>
                            <td>
                                <div class="col-sm-4 col-xs-6" style="max-width: 10rem;display: block;margin-left: auto;margin-right: auto;">
                                    <img src="<?= $item['Pro_Img']?>" alt="" class="img-fluid">
                                </div>
                            </td>
                            <td><?= $item['Pro_Name']?></td>
                            <td><?=number_format($item['Price'], 0, ".", ",")?> VND</td>
                            <td><?=$item['Size']?></td>
                            <td><?= $item['Quantity']?></td>
                            <td><?=number_format($item_price, 0, ".", ",")?> VND</td>
                            <td>
                                <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                
                                <a id="delete_1" name="bnt_delete" href="checkout.php?Pro_ID=<?= $item['Pro_ID']?>" class="btn btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i> 
                                </a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        endif; ?>
                        <?php
                        if(!empty($_SESSION["cart_item"])) {
                            foreach($_SESSION["cart_item"] as $k => $v) {
                                if($_GET["Pro_ID"] == $_SESSION["cart_item"][$k]['Pro_ID']){
                                    unset($_SESSION["cart_item"][$k]);				
                                    echo '<script>window.location="checkout.php";</script>';
                                }
                                if(empty($_SESSION["cart_item"]))
                                    unset($_SESSION["cart_item"]);
                            }
                        }
                        ?>
                    </tbody>
                    <thead>
                        <td colspan="5" class="table-active">TOTAL</td>
                        <td><?=number_format($total_price, 0, ".", ",")?> VND</td>
                        <td></td>
                    </thead>
                </table>
            </div>
        </div>
        </br>
        <div class="modal-footer">
            <a href="index.php" type="button" class="btn btn-danger">Cancel</a>
            <a type="button" class="btn btn-primary" href="./API/buy.php">Buy Now</a>
        </div>
    </div>
    
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
            </div>
        </div>
    </div>
        <?php require_once('./API/footer.php'); ?>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


        <!-- Additional Scripts -->
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/owl.js"></script>
</body>

</html>