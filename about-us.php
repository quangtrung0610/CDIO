<?php
if (session_id() === '') {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>CDIO</title>

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

    <!-- Header -->
    <?php
      require('./API/header.php');
    ?>
     <!-- Messenger Plugin chat Code -->
     <div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "108926781423496");
  chatbox.setAttribute("attribution", "biz_inbox");
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
    <!-- Page Content -->
    <<div class="page-heading about-heading header-text" 
          style="background-image: url(assets/images/2.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>our company</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>SYSTEM FOR SELLING CLOTHERS ONLINE</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/4.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>SYSTEM FOR SELLING CLOTHERS ONLINE</h4>
              <p>Our system proudly offers on-trend styles that cater to both young women and teenagers. 
              The system adheres to the concept of "everyone can enjoy the beauty of fashion". 
              The system can stay on top of the latest fashion trends from around the world and quickly bring these styles to market. 
              So whether you're looking for boho dresses and patterned t-shirts or chic shirts and swimwear, 
              System is the one-stop shop for the modern yet frugal fashionista. 
              Aims to provide high quality and fashionable products at attractive prices to every user in the world.
              </p>
              <ul class="social-icons">
                <li><a href="https://www.facebook.com/  "><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Manufacturing</h2>
              <p>Our system proudly offers on-trend styles that cater to both young women and teenagers. The system adheres to the concept of "everyone can enjoy the beauty of fashion". The system can stay on top of the latest fashion trends from around the world and quickly bring these styles to market. So whether you're looking for boho dresses and patterned t-shirts or chic shirts and swimwear, System is the one-stop shop for the modern yet frugal fashionista. Aims to provide high quality and fashionable products at attractive prices to every user in the world.
</p>
<div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/6.jpg" alt="">
              <img src="assets/images/7.jpg" alt="">
              <img src="assets/images/8.jpg" alt="">
              <img src="assets/images/9.jpg" alt="">
            </div>
            <h5>SYSTEM FOR SELLING CLOTHERS ONLINE.</h5>

            <p>If you are a true fashionista. This will definitely be one of those Local Brands of clothing you've heard of. As a famous fashion brand in Vietnam, inspired by the "infinity" mark reconstructed in the vertical direction. Lyos' fashion products are often quite typical, with accents, textures but not too fussy. In general, if you are looking for a famous domestic fashion store in Vietnam. This will be a name that cannot be ignored.
.</p>
          </div>
        </div>
      </div>
    </div>

    <?php
      require_once('./API/footer.php');
    ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
