<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Clothers<em> Store</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="products.php?per_page=9&page=1">Products</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="products.php?per_page=9&page=1" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.html">About Us</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="checkout.php">Checkout</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

                <?php if(isset($_SESSION['Use_Name']) && $_SESSION['Use_Name']): ?>              
                  <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php else : ?>
                  <li class="nav-item"><a class="nav-link" href="sign.php">SignIn</a></li>
                <?php endif;?>
                
            </ul>
          </div>
        </div>
      </nav>
    </header>
</body>
</html>