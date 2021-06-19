<?php
    session_start();
?>

    <!-- Page Content -->
    <!-- Bill -->
        <?php
        require_once("./API/connect.php"); 
        $Use_ID = $_SESSION['Use_ID'];
        $Use_Name = $_SESSION['Use_Name'];
        echo $Use_Name.'<br>';
        $sql = "SELECT Bill_ID, Amout, User_ID, Total_Money, Sale_Day, products  FROM bill where User_ID=$Use_ID";
        $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
        while($row = mysqli_fetch_array($result)) {
            echo "Billid: " .$row["Bill_ID"]. " - Amout: " . $row["Amout"]. " UserID :" . $row["User_ID"]. " TotalMoney :" 
            .$row["Total_Money"]. " SaleDay :" . $row["Sale_Day"]. " Products :" . $row["products"]. "<br>";
        }
          ?>




    <!-- Bill -->

