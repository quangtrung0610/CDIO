<?php
if (session_id() === '') {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>CDIO</title>

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

    <?php require('./API/header.php');?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Find your clothers today!</h4>
                    <h2>Further MARKDOWNS</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Fashion is immortal!</h4>
                    <h2>Heavenly prices</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Easy to buy</h4>
                    <h2>Many types of clothes</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Featured Products</h2>
                        <a href="products.php">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <?php include_once("./API/featuredProducts.php");?>


                <div class="best-features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>About Us</h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-content">
                                    <p style="text-align: justify;">
                                    Our system proudly offers on-trend styles that cater to both young women and teenagers. 
                                    The system adheres to the concept of "everyone can enjoy the beauty of fashion". 
                                    The system can stay on top of the latest fashion trends from around the world and quickly bring these styles to market. 
                                    So whether you're looking for boho dresses and patterned t-shirts or chic shirts and swimwear, 
                                    System is the one-stop shop for the modern yet frugal fashionista. 
                                    Aims to provide high quality and fashionable products at attractive prices to every user in the world.
                                    </p>
                                    <ul class="featured-list">
                                        <li><a href="#">Dang quang Trung</a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                    <a href="about-us.php" class="filled-button">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right-image">
                                    <img src="assets/images/about-1-570x350.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="call-to-action">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner-content">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>About our office</h4>
                                            <p style="text-align: justify;">
                                            Online clothers selling system with the motto "Accompanying your fashion style" will be a safe and reputable shopping place, 
                                            because we always uphold the criteria of bringing you quality products. with the most affordable prices.
                                            The online clothing sales system mainly only sells online, but always ensures the prestige and quality of the product
                                            </p>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-right">
                                            <a href="contact.php" class="filled-button">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php require_once('./API/footer.php');?>

                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


                <!-- Additional Scripts -->
                <script src="assets/js/custom.js"></script>
                <script src="assets/js/owl.js"></script>
</body>

</html>