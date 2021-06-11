<?php
    require_once("./API/connect.php");
    if(isset($_POST["btn_save"])){
        $Use_Name = trim($_POST['Use_Name']);
        $PassWord = trim($_POST['PassWord']);
        $rePassWord = trim($_POST['rePassWord']);
        
        $sql = "SELECT * FROM user WHERE Use_Name = '$Use_Name'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="sign.php";</script>';
        header("Localtion: sign.php");
        }else if($PassWord != $rePassWord){
        echo '<script language="javascript">alert("Sai mật khẩu!"); window.location="sign.php";</script>';
        header("Localtion: sign.php");
        }else{
        // Ngược lại thì thêm bình thường
        $sql = "INSERT INTO user (Use_Name, PassWord,Type) VALUES ('$Use_Name','$PassWord','User')";
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="sign.php";</script>';    
            if (mysqli_query($conn, $sql)){
                echo "User Name: ".$_POST['Use_Name']."<br/>";
                echo "PassWord: " .$_POST['PassWord']."<br/>";
                echo "Type: " .$_POST['Type']."<br/>";
            }else {
                echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="sign.php";</script>';
            }
        }
    }   
?>