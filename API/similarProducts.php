<?php
    require_once("connect.php");
        try{
            foreach($conn->query("SELECT * FROM product ") as $row){
                if($row['Pro_ID'] < 4){
                  echo '<div class="col-md-4">
                  <div class="product-item">
                      <a href="product-details.php?Pro_ID='.$row['Pro_ID'].'"><img src="'.$row['Pro_Img'].'" alt=""></a>
                      <div class="down-content">
                      <a href="product-details.php?Pro_ID='.$row['Pro_ID'].'"><h4>'.$row['Pro_Name'].'</h4></a>
                      <h6>'.number_format($row['Price'], 2, ".", ",").' VND</h6>
                      </div>
                    </div>
                  </div>';
                }   
            }
        }
        catch(PDOException $e){
            print "errorr! ".$e->getMessage() . "<\br>";
        }
?>
