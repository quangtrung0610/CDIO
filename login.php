<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "./css/style.css" type="text/css">
    <!--Favicon-->
    <link rel="shortcut icon" href="ico/cat.ico" type="image/x-icon"/>
</head>
<body>
    <form method="POST" action="login.php">
        <br><br><br><br><br><br>    
        <div class="register">
            <br>
            <h1><a href="/login.php">ĐĂNG NHẬP</a></h1>
            <table>
                <tr>
                    <td><input type="varchar(20)" name ="username" placeholder ="USERNAME"></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder ="PASSWORD"></td>
                </tr>
                <tr>
                    <td>
                        <label class="switch">
                            <input type="checkbox" value="1" name="remember">
                            <span class="slider round"></span>
                        </label>
                        <i>Nhớ Mật Khẩu?</i>   
                        <a href="repassword.php" style="float: right;">Đổi Mật Khẩu?</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            //kết nối database
                            require_once("connect.php");
                            if(isset($_POST["btn_submit"])){
                                //lấy thông tin USER
                                $username = $_POST["username"];
                                $username = addslashes($username);
                                $password = $_POST["password"];
                                $password = addslashes($password);
                                
                                //kiểm tra các input không được bỏ trống
                                if($username == "" || $password == "")
                                echo "<b>KHÔNG ĐƯỢC BỎ TRỐNG</b>";
                                else{
                                    //gán câu lệnh sql cho $query
                                    $query = "SELECT * FROM register WHERE `username` = '$username' AND `password` = '$password'";
                                    $result = $conn->query($query);
                                    $num_row = mysqli_num_rows($result);

                                    if($num_row == 0){
                                        echo "<b>USERNAME HOẶC PASSWORD SAI</b>";
                                    } else {
                                        //lưu username vào session
                                        $_SESSION['username'] = $username;
                                        echo "<script type='text/javascript'>alert('ĐĂNG NHẬP THÀNH CÔNG');</script>";
                                        header('location: index.php');
                                    }    
                                }      
                            }       
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="btn_submit">ĐĂNG NHẬP</button></td>
                </tr>
                
                <tr>
                    <td><a href="register.php" style="float: right;">chưa có tài khoản?</a></td>
                </tr>
            </table>
        </div>
    </form>
    
    <footer>copyright by Trung</footer>
</body>
</html>
