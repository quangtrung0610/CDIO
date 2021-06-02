<?php
    require_once("connect.php");
        try{
            foreach($conn->query("SELECT * FROM product ") as $row){
                echo '<div class="col-md-4">
                <div class="product-item">
                    <a href="product-details.php"><img src="'.$row['Pro_Img'].'" alt=""></a>
                    <div class="down-content">
                    <a href="product-details.php"><h4>'.$row['Pro_Name'].'</h4></a>
                    <h6></small>'.$row['Price'].'</h6>
                    <p>'.$row['Pro_detail'].'</p>
                    </div>
                  </div>
                </div>';
            }
        }
        catch(PDOException $e){
            print "errorr! ".$e->getMessage() . "<\br>";
        }
?>
