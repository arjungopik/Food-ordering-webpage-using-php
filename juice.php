<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIGHLAND:Juice</title>

    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid">

    <div class="row min-vh-100">
        <div class="col-12">
            <header class="row">
                <!-- Top Nav -->
                <div class="col-12 bg-dark py-2 d-md-block d-none">
                    <div class="row">
                        <div class="col-auto me-auto">
                            <ul class="top-nav">
                                <li>
                                    <a href="tel:9074197737"><i class="fa fa-phone-square me-2"></i>9074197737</a>
                                </li>
                                <li>
                                    <a href="mailto:highlandof@gmail.com"><i class="fa fa-envelope me-2"></i>highlandof@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <ul class="top-nav">
                                <li>
                                    <a href="register.html"><i class="fas fa-user-edit me-2"></i>Register</a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="fas fa-sign-in-alt me-2"></i>Login</a>       
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Top Nav -->

                <!-- Header -->
                <div class="col-12 bg-white pt-4">
                    <div class="row">
                        <div class="col-lg-auto">
                            <div class="site-logo text-center text-lg-left">
                                <a href="index.html">HIGHLAND RESTAURANT</a>
                            </div>
                        </div>
                        <div class="col-lg-5 mx-auto mt-4 mt-lg-0">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="search" class="form-control border-dark" placeholder="Search..." required>
                                        <button class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-auto text-center text-lg-left header-item-holder">
                            <a href="#" class="header-item">
                                <i class="fas fa-heart me-2"></i><span id="header-favorite">0</span>
                            </a>
                            <a href="cart.html" class="header-item">
                                <i class="fas fa-shopping-bag me-2"></i><span id="header-qty" class="me-3">2</span>
                                <i class="fas fa-money-bill-wave me-2"></i><span id="header-price">$4,000</span>
                            </a>
                        </div>
                    </div>

                    <!-- Nav -->
                    <div class="row">
                        <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
                            <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="mainNav">
                                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="starters.html">STARTERS<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="maincourse.html">MAINCOURSE<span class="sr-only">(current)</span></a>
                                    </li>
                                    
                                    <li class="nav-item active">
                                        <a class="nav-link" href="juice.html">JUICE<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="desert.html">DESSERT<span class="sr-only">(current)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Nav -->

                </div>
                <!-- Header -->

            </header>
        </div>

        <div class="col-12">
            <!-- Main Content -->
            <main class="row">

                <!-- Category Products -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 py-3">
                            <div class="row">
                                <div class="col-12 text-center text-uppercase">
                                    <h2>JUICE</h2>
                                </div>
                            </div>
                            <div class="row">

                                <!-- Product -->
                                <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                                    <div class="col-12 bg-white text-center h-100 product-item">
                                        <div class="row h-100">
                                            <div class="col-12 p-0 mb-3">
                                               
                                                    <img src="images/orange.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="col-12 mb-3">
                                                ORANGE JUICE
                                            </div>
                                            <div class="col-12 mb-3">
                                                <span class="product-price">
                                                        Rs:70
                                                    </span>
                                            </div>
                                            <div class="col-12 mb-3 align-self-end">
                                                  <form action="addtocart.php" method="post">
                                                        <input name="submit"  class="btn btn-outline-dark" type="submit" value="Add to cart">
                                                        <input type = "hidden" name="productid" value="1012">
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product -->

                                <!-- Product -->
                                <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                                    <div class="col-12 bg-white text-center h-100 product-item">
                                        <div class="row h-100">
                                            <div class="col-12 p-0 mb-3">
                                               
                                                    <img src="images/guvava.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="col-12 mb-3">
                                                GUVAVA JUICE
                                            </div>
                                            <div class="col-12 mb-3">
                                                    <span class="product-price">
                                                        Rs:70
                                                    </span>
                                            </div>
                                            <div class="col-12 mb-3 align-self-end">
                                                  <form action="addtocart.php" method="post">
                                                        <input name="submit"  class="btn btn-outline-dark" type="submit" value="Add to cart">
                                                        <input type = "hidden" name="productid" value="1013">
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product -->

                                <!-- Product -->
                                <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                                    <div class="col-12 bg-white text-center h-100 product-item">
                                        <div class="row h-100">
                                            <div class="col-12 p-0 mb-3">
                                               
                                                    <img src="images/PINAPLE.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="col-12 mb-3">
                                                PINEAPPLE JUICE
                                            </div>
                                            <div class="col-12 mb-3">
                                                <span class="product-price">
                                                        Rs:80
                                                    </span>
                                            </div>
                                            <div class="col-12 mb-3 align-self-end">
                                                  <form action="addtocart.php" method="post">
                                                        <input name="submit"  class="btn btn-outline-dark" type="submit" value="Add to cart">
                                                        <input type = "hidden" name="productid" value="1014">
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product -->

                                <!-- Product -->
                                <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                                    <div class="col-12 bg-white text-center h-100 product-item">
                                        <div class="row h-100">
                                            <div class="col-12 p-0 mb-3">
                                               
                                                    <img src="images/carrot.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="col-12 mb-3">
                                                CARROT JUICE
                                            </div>
                                            <div class="col-12 mb-3">
                                                    <span class="product-price">
                                                        Rs:60
                                                    </span>
                                            </div>
                                            <div class="col-12 mb-3 align-self-end">
                                                  <form action="addtocart.php" method="post">
                                                        <input name="submit"  class="btn btn-outline-dark" type="submit" value="Add to cart">
                                                        <input type = "hidden" name="productid" value="1015">
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product -->

                                <!-- Product -->
                                <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                                    <div class="col-12 bg-white text-center h-100 product-item">
                                        <div class="row h-100">
                                            <div class="col-12 p-0 mb-3">
                                               
                                                    <img src="images/WATERMELON.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="col-12 mb-3">
                                                WATERMELON JUICE
                                            </div>
                                            <div class="col-12 mb-3">
                                                <span class="product-price">
                                                        Rs:60
                                                    </span>
                                            </div>
                                            <div class="col-12 mb-3 align-self-end">
                                                  <form action="addtocart.php" method="post">
                                                        <input name="submit"  class="btn btn-outline-dark" type="submit" value="Add to cart">
                                                        <input type = "hidden" name="productid" value="1016">
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product -->

                                <!-- Product -->
                                <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                                    <div class="col-12 bg-white text-center h-100 product-item">
                                        <div class="row h-100">
                                            <div class="col-12 p-0 mb-3">
                                               
                                                    <img src="images/grape.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="col-12 mb-3">
                                               GRAPE JUICE
                                            </div>
                                            <div class="col-12 mb-3">
                                                    <span class="product-price">
                                                        Rs:60
                                                    </span>
                                            </div>
                                            <div class="col-12 mb-3 align-self-end">
                                                  <form action="addtocart.php" method="post">
                                                        <input name="submit"  class="btn btn-outline-dark" type="submit" value="Add to cart">
                                                        <input type = "hidden" name="productid" value="1017">
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product -->    

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category Products -->

                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-long-arrow-alt-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </main>
            <!-- Main Content -->
        </div>

        <div class="col-12 align-self-end">
            <!-- Footer -->
            <footer class="row">
                <div class="col-12 bg-dark text-white pb-3 pt-5">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 text-center text-sm-left mb-sm-0 mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="footer-logo">
                                        <a href="index.html">HIGHLAND RESTAURANT</a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <address>
                                        22 Sagar Street<br>
                                        Trivandrum, Kerala
                                    </address>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-8 text-center text-sm-left mb-sm-0 mb-3">
                            <div class="row">
                                <div class="col-12 text-uppercase">
                                    <h4>Who are we?</h4>
                                </div>
                                <div class="col-12 text-justify">
                                    <p>we are the makers of one of the quality foods in and around the Trivandrum area we prepare our food with atmost care and best quality food ingredients.Its been 15 years since our establishments have started.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-5 ms-lg-auto ms-sm-0 ms-auto mb-sm-0 mb-3">
                            <div class="row">
                                <div class="col-12 text-uppercase">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="col-12">
                                    <ul class="footer-nav">
                                        <li>
                                            <a href="#">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms & Conditions</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-2 col-4 me-auto mb-sm-0 mb-3">
                            <div class="row">
                                <div class="col-12 text-uppercase text-underline">
                                    <h4>Help</h4>
                                </div>
                                <div class="col-12">
                                    <ul class="footer-nav">
                                        <li>
                                            <a href="#">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="#">Returns</a>
                                        </li>
                                        <li>
                                            <a href="#">Track Order</a>
                                        </li>
                                        <li>
                                            <a href="#">Report Fraud</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 text-center text-sm-left">
                            <div class="row">
                                <div class="col-12 text-uppercase">
                                    <h4>Newsletter</h4>
                                </div>
                                <div class="col-12">
                                    <form action="#">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Enter your email..." required>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-outline-light text-uppercase">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>

</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>