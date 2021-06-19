<?php
require_once("connect.php");
$item_per_page = $_GET['per_page'];
$current_page = $_GET['page'];
$offset = ($current_page - 1) * $item_per_page;
$row = mysqli_fetch_array(mysqli_query($conn, "SELECT count(Type) FROM product WHERE Type = 'shirt'"));
$totalRecords = $row['count(Type)'];
$totalPages = ceil($totalRecords / $item_per_page);
try {
    foreach ($conn->query("SELECT * FROM product WHERE Type = 'shirt' limit " . $item_per_page . " offset " . $offset) as $row) {
        echo '<div class="col-md-4">
                <div class="product-item">
                    <a href="product-details.php?Pro_ID=' . $row['Pro_ID'] . '"><img src="' . $row['Pro_Img'] . '" alt=""></a>
                    <div class="down-content">
                    <a href="product-details.php?Pro_ID=' . $row['Pro_ID'] . '"><h4>' . $row['Pro_Name'] . '</h4></a>
                    <strong class="text-primary">' . number_format($row['Price'], 0, ".", ",") . ' VND</strong>
                    </div>
                  </div>
                </div>';
    }
} catch (PDOException $e) {
    print "errorr! " . $e->getMessage() . "<\br>";
}
?>
<div class="col-md-12">
    <ul class="pages">
        <?php
        $count = 1;
        while ($count < $totalPages) : ?>
            <li class="<?php if($count == $_GET['page']){
                    echo $active;
                }else?>"><a href="?per_page=9&page=<?= $count ?>&type=shirt"><?= $count ?></a></li>
            <?php $count++; ?>
        <?php endwhile; ?>
        <li><a href="?per_page=9&page=<?= $totalPages ?>&type=shirt"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
</div>