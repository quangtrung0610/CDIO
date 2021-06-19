<?php
//Gọi file connection.php
require_once("./API/connect.php");
// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
    // lấy thông tin người dùng
    $Use_Name = $_POST["Use_Name"];
    $PassWord = $_POST["PassWord"];
    

    $sql = "SELECT * FROM user WHERE Use_Name = '$Use_Name' and PassWord = '$PassWord' ";
    $query = mysqli_query($conn, $sql);
    $User = mysqli_fetch_array($query);
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $Use_Name = strip_tags($Use_Name);
    $Use_Name = addslashes($Use_Name);
    $PassWord = strip_tags($PassWord);
    $PassWord = addslashes($PassWord);
    if ($Use_Name == "" || $PassWord == "") {
        echo '<script language="javascript">alert("userName or Password không được để trống"); window.location="sign.php";</script>';
    } else {
        $num_rows = mysqli_num_rows($query);
        if ($num_rows == 0) {
            echo '<script language="javascript">alert("Username or Password không đúng"); window.location="sign.php";</script>';;
        } else {
            unset($_SESSION['cart_item']);
            session_start();
            $Type = $User['Type'];
            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['Use_Name'] = $Use_Name;
            $_SESSION['Use_ID'] = $User['Use_ID'];
            if($Type === 'admin'){
                echo "<script>window.location.href='./admin/index.php';</script>";
            }else{
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                echo "<script>window.location.href='index.php';</script>";
            }
        }
    }
}
