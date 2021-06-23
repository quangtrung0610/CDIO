<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php require_once('API/slideBar.php'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php require_once('API/topBar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product Management</h1>
          </div>

            <form class="form-horizontal" action="API/add.php" method="POST">

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-8 control-label" for="product_name">PRODUCT NAME</label>
                <div class="col-md-8">
                  <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-8 control-label" for="amount">AMOUNT</label>
                <div class="col-md-8">
                  <input id="amount" name="amount" placeholder="AMOUNT" class="form-control input-md" required="" type="number">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-8 control-label" for="size">SIZE</label>
                <div class="col-md-8">
                  <input id="size" name="size" placeholder="SIZE" class="form-control input-md" required="" type="text">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-8 control-label" for="price">PRICE</label>
                <div class="col-md-8">
                  <input id="price" name="price" placeholder="PRICE" class="form-control input-md" required="" type="number">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-8 control-label" for="brand_id">BRAND ID</label>
                <div class="col-md-8">
                  <input id="brand_id" name="brand_id" placeholder="BRAND ID " class="form-control input-md" required="" type="text">

                </div>
              </div>

              <!-- Textarea -->
              <div class="form-group">
                <label class="col-md-8 control-label" for="product_description">PRODUCT DETAIL</label>
                <div class="col-md-8">
                  <textarea class="form-control" id="product_detail" name="product_detail"></textarea>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-8 control-label" for="stock_alert">TYPE</label>
                <div class="col-md-8">
                  <input id="type" name="type" placeholder="TYPE" class="form-control input-md" required="" type="text">

                </div>
              </div>

              <!-- File Button -->
              <div class="form-group">
                <label class="col-md-8 control-label" for="filebutton">main_image</label>
                <div class="col-md-8">
                  <input name="filebutton1" class="input-file" type="file">
                </div>
              </div>
              <!-- File Button -->
              <div class="form-group">
                <label class="col-md-8 control-label" for="filebutton">images_1</label>
                <div class="col-md-8">
                  <input name="filebutton2" class="input-file" type="file">
                </div>
              </div>
              <!-- File Button -->
              <div class="form-group">
                <label class="col-md-8 control-label" for="filebutton">images_2</label>
                <div class="col-md-8">
                  <input name="filebutton3" class="input-file" type="file">
                </div>
              </div>
              <!-- File Button -->
              <div class="form-group">
                <label class="col-md-8 control-label" for="filebutton">images_3</label>
                <div class="col-md-8">
                  <input name="filebutton4" class="input-file" type="file">
                </div>
              </div>

              <!-- Button -->
              <div class="form-group">
                <label class="col-md-8 control-label" for="Save"> </label>
                <div class="col-md-8">
                  <button id="Save" name="Save" class="btn btn-primary">Save</button>
                  <a href="./index.php">Home</a>
                </div>
              </div>

            </form>
          <!-- Content Row -->
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>