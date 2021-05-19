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
    <link rel="shortcut icon" href="./ico/cat.ico" type="image/x-icon"/>
</head>
<body>
    <?php
        require('header.php');
    ?>
<form action="insert.php" method = "POST">
    <br><br><br><br><br><br>
        <div class="register">
            <br>
            
            <h1>THÊM MÈO</h1>
            <table>
                <tr>
                    <td><input type="text" name ="name" placeholder ="TÊN MÈO"></td>
                </tr>
                <tr>
                    <td><input type="text" name ="type" placeholder ="LOÀI"></td>
                </tr>
                <tr>
                    <td>
                        <select type="char(1)" name ="gender">
                        <option class = "opt" value="D">
                            <span>Đực</span>
                        </option>
                        <option class = "opt" value="C">Cái</option>
                    </td>
                </tr>
                <tr>
                    <td class = "desc"><input type="text" name ="description" placeholder ="DESCRIPTION"></td>
                </tr>
                <!-- <tr>
                    <td>
                        <form method="POST" action="upload.php" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <input type="file" name="img">
                            <button type="submit" name="upload">POST</button>
                        </form>
                    </td>
                </tr> -->
                <tr>
                    <td>
                        <?php
                            //kết nối database
                            require_once("connect.php");

                            if(isset($_POST["btn_submit"])){
                                //lấy thông tin trong database bằng phương thức POST
                                $name = $_POST["name"];
                                $type = $_POST["type"];
                                $gender = $_POST["gender"];
                                $description = $_POST["description"];
                                $img = $_POST["img"];
                        
                                //kiểm tra các input không được bỏ trống
                                if($name == "" || $type == "" || $gender == "" || $description == "" ||  $img == ""){
                                    echo '<b>NHẬP THIẾU THÔNG TIN</b>';
                                } else {
                                    echo '<b>SUCCESS</b>';
                                    //gán câu lệnh sql cho $query
                                    $query = "INSERT INTO `catinfo`(`name`, `type`, `gender`, `description`, `img`) 
                                    VALUES ('$name', '$type', '$gender', '$description', '$img')";

                                    //thực thi câu lệnh và gán câu lệnh vào $result để kiểm tra lỗi.
                                    $result = $conn->query($query);

                                    //nếu không lỗi thì sẽ thông bao thành công
                                    if($result == true){
                                        echo "<b>THÊM THÀNH CÔNG</b>";
                                    }else {
                                    //show lỗi 
                                    echo "Error: " . $query . "<br>" . mysqli_error($conn);
                                    }    
                                }
                            }  
                            mysqli_close($conn);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="btn_submit">THÊM MÈO</button></td>
                </tr>
            </table>
            <br>
        </div>
    </form>

    
    <footer>copyright by Trung</footer>
</body>
</html>

