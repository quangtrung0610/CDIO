<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "./css/style.css" type="text/css">
    <!--font-->
    <link href="https://fonts.google.com/specimen/Monoton" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" href="ico/cat.ico" type="image/x-icon"/>
</head>
<body>
<form action="register.php" method = "POST">
    <br><br><br><br><br><br>
        <div class="register">
            <br>
            
            <h1><a href="/login.php">ĐĂNG KÝ</a></h1>
            <table>
                <tr>
                    <td><input type="varchar(30)" name ="hoten" placeholder ="TÊN ĐẦY ĐỦ"></td>
                </tr>
                <tr>
                    <td><input type="varchar(10)" name ="dienthoai" placeholder ="SỐ ĐIỆN THOẠI"></td>
                </tr>
                <tr>
                    <td><input type="varchar(20)" name ="username" placeholder ="USERNAME"></td>
                </tr>
                <tr>
                    <td><input type="password" name ="password" placeholder ="PASSWORD"></td>
                </tr>
                <tr>
                    <td><input type="varchar(50)" name ="email" placeholder ="EMAIL"></td>
                </tr>
                <tr>
                    <td>
                        <div class="captcha" style="display: flex; justify-content: center;">
                            <input type="text" name="input" placeholder="CAPTCHA">
                            <img src="./captcha.php" title="" alt=""/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            //kết nối database
                            require_once("connect.php");

                            if(isset($_POST["btn_submit"])){
                                //lấy thông tin trong database bằng phương thức POST
                                $hoten = $_POST["hoten"];
                                $dienthoai = $_POST["dienthoai"];
                                $username = $_POST["username"];
                                $password = $_POST["password"];
                                $email = $_POST["email"];
                                $input = $_POST['input'];
                        
                                //kiểm tra các input không được bỏ trống
                                if($hoten == "" || $dienthoai == "" || $username == "" || $password == "" ||  $email == "")
                                    echo '<b>NHẬP THIẾU THÔNG TIN</b>';
                                else{
                                    //check username trong database đã tồn tại hay chưa
                                    $check = $conn->query("SELECT * FROM register WHERE username='$username'");
                                    $username_exist = mysqli_num_rows($check); 
                                    if($username_exist > 0){
                                        echo '<b>TÀI KHOẢN ĐÃ TỒN TẠI</b>';
                                    }else if($input != $_SESSION['captcha'] || $input = ""){
                                        echo '<b>CAPTCHA SAI!!!</b>';
                                    }else {
                                        echo '<b>SUCCESS</b>';
                                        //gán câu lệnh sql cho $query
                                        $query = "INSERT INTO `register`(`hoten`, `dienthoai`, `username`, `password`, `email`) 
                                        VALUES ('$hoten', '$dienthoai', '$username', '$password', '$email')";

                                        //thực thi câu lệnh và gán câu lệnh vào $result để kiểm tra lỗi.
                                        $result = $conn->query($query);

                                        //nếu không lỗi thì sẽ thông bao thành công
                                        if($result == true){
                                            echo "<script type='text/javascript'>alert('bạn đã đăng ký thành công');</script>";
                                            header('location: login.php');
                                        }else {
                                        //show lỗi 
                                        echo "Error: " . $query . "<br>" . mysqli_error($conn);
                                        }    
                                    }      
                                }  
                            }
                            mysqli_close($conn);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="btn_submit">ĐĂNG KÝ</button></td>
                </tr>
                <tr>
                    <td><a href="login.php" style="float: right;">Đã có tài khoản?</a></td>
                </tr> 
            </table>
            <br>
        </div>
    </form>

    
    <footer>copyright by Trung</footer>
</body>
</html>

