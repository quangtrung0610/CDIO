<?php
session_start();
?>
<?php
require_once("connect.php");
$Use_ID = $_SESSION['Use_ID'];
$DAY = date("Y-m-d h:i:sa");
$Prod_Name = '';
if (isset($_SESSION["cart_item"])) :
  $total_quantity = 0;
  $total_price = 0;
  //Lấy session cart
  foreach ($_SESSION["cart_item"] as $item) :
    $item_price = $item["Quantity"] * $item["Price"];
    $total_quantity += $item["Quantity"];
    $total_price += $item_price;
    //gán biến cho từng mảng session
    $Pro_Name = $item["Pro_Name"];
    $Size = $item["Size"];
    $Quantity = $item["Quantity"];
    //sp có slg lớn hơn 1 thì cộng chuỗi
    if ($Quantity >= 1) {
      $Prod_Name .= $Pro_Name . " - " . $Size . " x " . $Quantity . "<br>";
    };

  endforeach;
endif;

$sql = "INSERT INTO bill(Amout,User_ID, Total_Money ,Sale_Day,products) 
            VALUES ('$total_quantity','$Use_ID','$total_price','$DAY','$Prod_Name')";
if ($conn->query($sql) === TRUE) : 
  unset($_SESSION["cart_item"]);?>

  <script language="javascript">
    alert("Thanh Toán Thành Công");
    window.location = "../checkout.php";
  </script>
<?php else :
  echo "Error: " . $sql . "<br>" . $conn->error;
endif;
?>