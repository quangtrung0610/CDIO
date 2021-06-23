<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="xlupdate.php" method="POST">
    <fieldset>
        <?php
        require_once("connect.php");
        $maxid = mysqli_query($conn, "SELECT max(img_ID) FROM images");
        $imgid = mysqli_fetch_array($maxid);

        $Pro_ID = $imgid['max(img_ID)'];
        ?>
        <!-- Form Name -->
        <legend>UPDATE PRODUCTS

        </legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Pro_ID</label>
            <div class="col-md-4">
                <input name="Pro_ID" placeholder="" class="form-control input-md" value="<?php echo $_GET['Pro_ID']?>" readonly type="number">

            </div>
        </div>

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
            <label class="col-md-4 control-label" for="product_name">img_ID</label>
            <div class="col-md-4">
                <input  name="img_ID" placeholder="" class="form-control input-md" value="<?php echo $_GET['img_ID']?>" readonly type="number">

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
                <input id="img_1" name="img_1" class="input-file" type="file">
            </div>
        </div>
        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">images_1</label>
            <div class="col-md-4">
                <input id="img_2" name="img_2" class="input-file" type="file">
            </div>
        </div>
        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">images_2</label>
            <div class="col-md-4">
                <input id="img_3" name="img_3" class="input-file" type="file">
            </div>
        </div>
        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">images_3</label>
            <div class="col-md-4">
                <input id="img_4" name="img_4" class="input-file" type="file">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="update"> </label>
            <div class="col-md-4">
                <button name="update" class="btn btn-primary">Update</button>
            </div>
        </div>

    </fieldset>
</form>