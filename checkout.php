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
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php
      require('./API/header.php');
    ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text"
        style="background-image: url(assets/images/headingBack.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Welcome everyone with</h4>
                        <h2>Shopping cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Shoppingcart-->
    </br>
    <div class="row">
    <div class="col col-md-12">
        <table class="table table-bordered" >
            <thead>
                <tr>
                    <th>IMG</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="datarow">
            <?php
                require_once('./API/connect.php');
                if(file_exists("cart.txt")):
                    $handle = fopen("cart.txt", "r") or die("Unable to open file!");
                    while(!feof($handle)) :
                    ?>
                    <tr>
                        <td>
                            <div class="col-sm-4 col-xs-6" style="max-width: 7rem;">
                                <img src="<?= fgets($handle)?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        </td>
                        <td><?= fgets($handle)?></td>
                        <td><?= fgets($handle)?></td>
                        <td><?= fgets($handle)?></td>
                        <td><?= fgets($handle)?></td>
                        <td><?= fgets($handle)?></td>
                        <td>
                            <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                            <a id="delete_1"  class="btn btn-danger btn-delete-sanpham">
                                <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                            </a>
                        </td>
                    </tr>
            <?php endwhile; endif;?>
            </tbody>
        </table>
    </br>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="index.php">Cancel</a></button>
        <button type="button" class="btn btn-primary">Buy Now</button>
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