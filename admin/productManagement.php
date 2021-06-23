<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="form-horizontal" action="add.php" method="POST">
  <fieldset>

    <!-- Form Name -->
    <legend>PRODUCTS
      <?php
      $log_directory = '../assets/images/product/';

      $results_array = array();

      if (is_dir($log_directory)) {
        if ($handle = opendir($log_directory)) {
          //Notice the parentheses I added:
          while (($file = readdir($handle)) !== FALSE) {
            $results_array[] = $file;
          }
          closedir($handle);
        }
      }

      //Output findings
      print_r( $results_array);
      ?>
    </legend>


    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
      <div class="col-md-4">
        <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="amount">AMOUNT</label>
      <div class="col-md-4">
        <input id="amount" name="amount" placeholder="AMOUNT" class="form-control input-md" required="" type="number">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="size">SIZE</label>
      <div class="col-md-4">
        <input id="size" name="size" placeholder="SIZE" class="form-control input-md" required="" type="text">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="price">PRICE</label>
      <div class="col-md-4">
        <input id="price" name="price" placeholder="PRICE" class="form-control input-md" required="" type="number">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="brand_id">BRAND ID</label>
      <div class="col-md-4">
        <input id="brand_id" name="brand_id" placeholder="BRAND ID " class="form-control input-md" required="" type="text">

      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_description">PRODUCT DETAIL</label>
      <div class="col-md-4">
        <textarea class="form-control" id="product_detail" name="product_detail"></textarea>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="stock_alert">TYPE</label>
      <div class="col-md-4">
        <input id="type" name="type" placeholder="TYPE" class="form-control input-md" required="" type="text">

      </div>
    </div>

    <!-- File Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="filebutton">main_image</label>
      <div class="col-md-4">
        <input name="fileToUpload" class="input-file" type="file">
      </div>
    </div>
    <!-- File Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="filebutton">images_1</label>
      <div class="col-md-4">
        <input name="fileToUpload" class="input-file" type="file">
      </div>
    </div>
    <!-- File Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="filebutton">images_2</label>
      <div class="col-md-4">
        <input name="fileToUpload" class="input-file" type="file">
      </div>
    </div>
    <!-- File Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="filebutton">images_3</label>
      <div class="col-md-4">
        <input name="fileToUpload" class="input-file" type="file">
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Save"> </label>
      <div class="col-md-4">
        <button id="Save" name="Save" class="btn btn-primary">Save</button>
      </div>
    </div>

  </fieldset>
</form>

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