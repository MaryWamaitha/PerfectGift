<?php
session_start(); 

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" href="../CSS/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../CSS/style.css">

    <title>Website Menu #3</title>
</head>
<body>


    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-11 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="admin_view.html" class="text-white mb-0">Welcome <?php echo $_SESSION["name"]; ?> </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="active"><a href="../View/login.php"><span>Login</span></a></li>
                            <li class="active"><a href="../View/Register.php"><span>Register</span></a></li>
                            <li class="has-children">
                                <a href="about.html"><span>Brands</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="../Actions/brand.php">Add Brand</a></li>
                                    <li><a href="../Actions/edit_brand_check.php">View and Edit Brand</a></li>
                                    <li><a href="../Actions/category.php">Add Category</a></li>
                                    <li><a href="../Actions/edit_category_check.php">View and Edit Category</a></li>
                                    <li class="has-children">
                                        <a >Products</a>
                                        <ul class="dropdown">
                                        <li><a href="../View/add_product.php">Add Product</a></li>
                                        <li><a href="../View/view_products.php">View and Edit product</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                            <li><a href="#">Menu Four</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="listings.html"><span>Listings</span></a></li>
                            <li><a href="about.html"><span>About</span></a></li>
                            <li><a href="blog.html"><span>Blog</span></a></li>
                            <li><a href="contact.html"><span>Contact</span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

            </div>

        </div>
        </div>

    </header>

    <div class="hero" style="background-image: url('../Images/hero_1.jpg');"></div>



    <script src="../JS/jquery-3.3.1.min.js"></script>
    <script src="../JS/popper.min.js"></script>
    <script src="../JS/bootstrap.min.js"></script>
    <script src="../JS/jquery.sticky.js"></script>
    <script src="../JS/main.js"></script>
</body>
</html>