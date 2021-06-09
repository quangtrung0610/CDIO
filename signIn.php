<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link href="./assets/css/sign.css" rel="stylesheet">
</head>
<body>
<?php
    //Gọi file connection.php
    require_once("connect.php");
    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
    if (isset($_POST["btn_submit"])) {
        // lấy thông tin người dùng
        $Use_Name = $_POST["Use_Name"];
        $PassWord = $_POST["PassWord"];
        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
        $Use_Name = strip_tags($Use_Name);
        $Use_Name = addslashes($Use_Name);
        $PassWord = strip_tags($PassWord);
        $PassWord = addslashes($PassWord);
        
        if ($Use_Name == "" || $PassWord =="") {
            echo "Use_Name hoặc PassWord bạn không được để trống!";
        }else{
            $sql = "select * from user where Use_Name = '$Use_Name' and PassWord = '$PassWord' ";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows==0) {
                echo "tên đăng nhập hoặc mật khẩu không đúng !";
            }else{
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['Use_Name'] = $Use_Name;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
            }
        }
    }
?>


    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" action="SignIn.php">
                    
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="Use_Name" class="login__input" placeholder="User name / Email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="PassWord" class="login__input" placeholder="Password">
                    </div>
                    <button name = "btn_submit" type ="submit" class="button login__submit">
                        <span class="button__text">Log In Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                <div class="social-login">
                    <a href="./signUp.php">Sign Up</a>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
</body>
</html>