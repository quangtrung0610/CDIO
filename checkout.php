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

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php
      require('header.php');
    ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Lorem ipsum dolor sit amet</h4>
              <h2>Shopping cart</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--Shoppingcart-->
</br>
<?php
	require_once("connect.php");
     $sql="select * from product order by Pro_ID";
     $query = mysqli_query($conn, $sql);
     if(mysqli_num_rows($query)>0)
     {
     while($row = mysqli_fetch_array($query))
     {
     echo "<div class='pro'>";
     echo "<h3>$row[Pro_Name]</h3>";
     echo "Price:".number_format($row['Price'],3)." USD<br />";
     echo "<p><a href='addcart.php?item=$row[Pro_ID]'> Mua Sach</a></p>";
     echo "</div>";
     }
     }
?>
<?php if (isset($_SESSION['success'])) :?>
<p class="text-danger"><?= $_SESSION['success'] ?></p>
<?php endif ; unset($_SESSION['success']); ?>
</br>
<a href="listcart.php">List Cart</a>
 
</br>

               
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="index.php">Cancel</a></button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
       

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>