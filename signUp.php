<!DOCTYPE html>
<?php
 session_start();
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="./assets/css/sign.css" rel="stylesheet">
</head>
<body>
 <?php

    require_once("connect.php");
    if(isset($_POST["btn_save"])){
        $Use_Name = trim($_POST['Use_Name']);
        $PassWord = trim($_POST['PassWord']);
       
        
        $sql = "SELECT * FROM user WHERE Use_Name = '$Use_Name'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="signUp.php";</script>';
        header("Localtion: signUp.php");
    }
    else {
        // Ngược lại thì thêm bình thường
        $sql = "INSERT INTO user (Use_Name, PassWord,Type) VALUES ('$Use_Name','$PassWord','User')";
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="signUp.php";</script>';
        
    if (mysqli_query($conn, $sql)){
        echo "User Name: ".$_POST['Use_Name']."<br/>";
        echo "PassWord: " .$_POST['PassWord']."<br/>";
        echo "Type: " .$_POST['Type']."<br/>";
    }
    else {
        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="signUp.php";</script>';
    }
}
}
?>
<div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" action="signUp.php">
                   
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="Use_Name" class="login__input" placeholder="User name / Email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="PassWord" class="login__input" placeholder="Password">
                    </div>
                    <button name = "btn_save" type ="submit" class="button login__submit">
                        <span class="button__text">Sign Up Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                <div class="social-login">
                    <a href="./SignIn.php">Sign In</a>
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