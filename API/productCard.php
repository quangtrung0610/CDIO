<div class="col-md-4">
    <div class="product-item">
        <a href="product-details.php?Pro_ID=<?= $row['Pro_ID'] ?>"><img src="<?= $row['Pro_Img'] ?>"></a>
        <div class="down-content">
            <a href="product-details.php?Pro_ID=<?= $row['Pro_ID'] ?>">
                <h4><?= $row['Pro_Name'] ?></h4>
            </a>

            <?php $smallPrice = $row['Price'] + $row['Price'] * 10 / 100; ?>

            <small><del><?= number_format($smallPrice, 0, ".", ",") ?> VND</del></small>
            <strong class="text-danger"><?= number_format($row['Price'], 0, ".", ",") ?> VND</strong>

            <form method="post">
                <a type="submit" href="product-details.php?Pro_ID=<?= $row['Pro_ID'] ?>" class="btn btn-outline-dark w-100" name="btn_submit">
                    <i class="fa fa-shopping-cart"></i>Add to Cart
                </a>
            </form>
        </div>
    </div>
</div>