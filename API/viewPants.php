<?php
    require_once("connect.php");
    $item_per_page = $_GET['per_page'];
    $current_page = $_GET['page'];
    $offset = ($current_page - 1) * $item_per_page;
    $totalRecords = mysqli_query($conn,"SELECT * FROM product" );
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
        try{      
            foreach($conn->query("SELECT * FROM product WHERE Type = 'pants' limit ".$item_per_page." offset " .$offset) as $row){
                echo '<div class="col-md-4">
                <div class="product-item">
                    <a href="product-details.php?Pro_ID='.$row['Pro_ID'].'"><img src="'.$row['Pro_Img'].'" alt=""></a>
                    <div class="down-content">
                    <a href="product-details.php?Pro_ID='.$row['Pro_ID'].'"><h4>'.$row['Pro_Name'].'</h4></a>
                    <strong class="text-primary">'.number_format($row['Price'], 2, ".", ",").' VND</strong>
                    </div>
                  </div>
                </div>';

            }
        }
        catch(PDOException $e){
            print "errorr! ".$e->getMessage() . "<\br>";
        }
?>
