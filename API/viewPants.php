<?php
require_once("connect.php");
$item_per_page = $_GET['per_page'];
$current_page = $_GET['page'];
$offset = ($current_page - 1) * $item_per_page;
$row = mysqli_fetch_array(mysqli_query($conn, "SELECT count(Type) FROM product WHERE Type = 'pants'"));
$totalRecords = $row['count(Type)'];
$totalPages = ceil($totalRecords / $item_per_page);
try {
    foreach ($conn->query("SELECT * FROM product WHERE Type = 'pants' limit " . $item_per_page . " offset " . $offset) as $row) {
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
            <li class="<?php if($count == $_GET['page']){
                    echo $active;
                }else?>"><a href="?per_page=9&page=<?= $count ?>&type=pants"><?= $count ?></a></li>
            <?php $count++; ?>
        <?php endwhile; ?>
        <li><a href="?per_page=9&page=<?= $totalPages ?>&type=pants"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
</div>