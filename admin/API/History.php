<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/images/male-clothes.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>trungd3pn.xyz</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <?php require_once('./API/header.php'); ?>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/headingBack.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Welcome everyone with</h4>
                        <h2>BILL</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "108926781423496");
        chatbox.setAttribute("attribution", "biz_inbox");
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v11.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Page Content -->
    <!-- Bill -->
        <?php
        require_once("./API/connect.php"); 
        ?>
        <?php
        $Use_ID = $_SESSION['Use_ID'];
        $Use_Name = $_SESSION['Use_Name'];
        ?>
        <div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-uppercase">Invoice</h1>
                        <div class="billed"><span class="font-weight-bold text-uppercase">UserName:</span><span class="ml-1"> <?=$Use_Name?> </span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">User ID:</span><span class="ml-1"> <?=$Use_ID?> </span></div>
                        
                    </div>
                    <div class="col-md-6 text-right mt-3">
                        <h4 class="text-danger mb-0">BILL</h4><span>#</span>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Size</th>
                                                <th>Price</th>
                                                <th>Detail</th>
                                                <th>Type</th>
                                            </tr>
                                        </thead>
                            <!-- data -->
                            <tbody>
<?php if (mysqli_num_rows($result) > 0) {

                                            while($row = mysqli_fetch_assoc($result)) { ?>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <?php echo $row['Pro_ID']; ?>
                                                        </th>
                                                        <td>
                                                            <?php echo $row['Pro_Name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['Size']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['Price']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['Pro_detail']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['Type']."</br>"; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php
                                                $count++;
                                            } 
                                        }
                                        ?>
            <tr>
                <td></td>
                <td></td>
                <td>Total Money</td>
                <td><?= $Total ?></td>
             </tr>
</tbody>
</table>
</div>
                </div>
                <div class="text-right mb-3"><button class="btn btn-danger btn-sm mr-5" type="button">Confirm</button></div>
            </div>
        </div>
    </div>
</div>
    <!-- Bill -->
                <?php require_once('./API/footer.php'); ?>

                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


                <!-- Additional Scripts -->
                <script src="assets/js/custom.js"></script>
                <script src="assets/js/owl.js"></script>
                <!-- Messenger Plugin chat Code -->
                <div id="fb-root"></div>

                <!-- Your Plugin chat code -->
                <div id="fb-customer-chat" class="fb-customerchat">
                </div>

</body>

</html>