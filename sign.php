<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign</title>
    <link rel="icon" href="./assets/images/male-clothes.ico">

    <link href="./assets/css/sign.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once('./API/signIn.php');
    require_once('./API/signUp.php');
    ?>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="sign.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                </div>
                <span>use your email for registration</span>
                <input type="text" name="Use_Name" placeholder="User Name" />
                <input type="password" name="PassWord" placeholder="Password" />
                <input type="password" name="rePassWord" placeholder="Password" />
                <button name="btn_save" type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="sign.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                </div>
                <span>Use your account</span>
                <input type="text" name="Use_Name" placeholder="User Name" />
                <input type="password" name="PassWord" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button name="btn_submit" type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/sign.js"></script>
</body>

</html>