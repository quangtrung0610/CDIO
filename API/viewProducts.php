<?php
require_once("connect.php");
$item_per_page = $_GET['per_page'];
$current_page = $_GET['page'];
$offset = ($current_page - 1) * $item_per_page;
$totalRecords = mysqli_query($conn, "SELECT * FROM product");
$totalRecords = $totalRecords->num_rows;
$totalPages = ceil($totalRecords / $item_per_page);
try {
    foreach ($conn->query("SELECT * FROM product limit " . $item_per_page . " offset " . $offset) as $row) {
        require('productCard.php');
    }
} catch (PDOException $e) {
    print "errorr! " . $e->getMessage() . "<\br>";
}
?>
<div class="col-md-12">
    <ul class="pages">
        <?php
        $count = 1;
        $active = 'active';
        while ($count < $totalPages) : ?>
            <li class="<?php if ($count == $_GET['page']) {
                            echo $active;
                        } else ?>"><a href="?per_page=9&page=<?= $count ?>&type=all"><?= $count ?></a></li>
            <?php $count++; ?>
        <?php endwhile; ?>
        <li><a href="?per_page=9&page=<?= $totalPages ?>&type=all"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
</div>