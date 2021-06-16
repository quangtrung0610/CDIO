<?php 
        session_start();
?>
<?php 
        require_once("connect.php");  
           $amout = 0;
           $Prod_Name = "";
           $Use_ID = $_SESSION['Use_ID'];
           
            $DAY = date("Y-m-d");
            $url = "../cart.txt";
            $handle = fopen($url, "r") or die("Unable to open file!");;//mở file ở chế độ đọc
            while(!feof($handle)) :

            $Pro_IMG = fgets($handle);
            $Pro_Name = fgets($handle);
            
            $Price = fgets($handle);
            $Size = fgets($handle);
            $Quantity =fgets($handle);
            $amout += (int)$Quantity;
            $Total = (int)fgets($handle) * $Quantity;
            
            if($Quantity >=1 ){
              $Prod_Name .= $Pro_Name." - ".$Size." x ".$Quantity;
            }
        endwhile;
        //$ads = $Prod_Name;
        //echo ("TEst4-----------------: $ads");
        $sql = "INSERT INTO bill(Amout,User_ID, Total_Money ,Sale_Day,products) 
            VALUES ('$amout','$Use_ID','$Total','$DAY','$Prod_Name')";
        if ($conn->query($sql) === TRUE) {
          unlink('../cart.txt');
          echo '<script language="javascript">alert("Thanh Toán Thành Công"); window.location="../checkout.php";</script>';
          //header("Location:index.php");
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
?>    