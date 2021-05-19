<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "./css/style.css" type="text/css">
</head>
<body>
<div class="menulogo">
    <table>
    <thead>
    <tr>
        <th>
            <a href="index.php">
                <img src='./imgs/logo.png' class="logo">
            </a>
        </th>

        <th  style="text-align: right; width: 100%;">
            <?php 
            if (isset($_SESSION['username']) && $_SESSION['username']){
                echo '<b>'.$_SESSION['username'].'</b>'.'<a href="login.php">Logout</a>';
            }
            else{
                echo '<b>Bạn chưa đăng nhập</b>';
            }
            ?>  
        </th>
    </tr>
    </thead>
    </table>
    
    
</div>
<div class="menu">
        <ul>
            <li><a class="acctive" href = "index.php">XEM THONG TIN MÈO</a></li>
            <li><a href = "insert.php">CHỈNH SỬA THÔNG TIN MÈO</a></li>
            <li><a href = "about.php">ABOUT</a></li>
            
        </ul>
    </div>
</body>
</html>