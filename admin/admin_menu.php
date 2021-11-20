
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
    <script src="https://kit.fontawesome.com/bb731240c4.js" crossorigin="anonymous"></script>

  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">

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
                            <li class="active"><a href="./dashboard/index.php"><span>HOME</span></a></li>
                            <li class="has-children">
                                <a ><span>Products</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="../admin/add_product.php">Add Products</a></li>
                                    <li><a href="../admin/view_products.php">View and Edit Products</a></li> </ul>
                                <li class="has-children">
                                <a ><span>Brands</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="../admin/add_brand.php">Add Brand</a></li>
                                    <li><a href="../admin/view_brand.php">View and Edit Brand</a></li> </ul>
                                    <li class="has-children">
                                <a ><span>Categories</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="../admin/add_category.php">Add Category</a></li>
                                    <li><a href="../admin/view_category.php">View and Edit Category</a></li> </ul>
                                <li class="has-children">
                                <a ><span>Brands</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="../Actions/brand.php">Add Brand</a></li>
                                    <li><a href="../Actions/edit_brand_check.php">View and Edit Brand</a></li>
                                    <li><a href="add_category.php">Add Category</a></li>
                                    <li><a href="../Actions/edit_category_check.php">View and Edit Category</a></li>
                                    <li class="has-children">
                                        <a href="#">Dropdown</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Menu One</a></li>
                                            <li><a href="#">Menu Two</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                            <li><a href="#">Menu Four</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html"><span>Logout</span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

            </div>

        </div>
        </div>

    </header>

   



    <script src="../JS/admin/jquery-3.3.1.min.js"></script>
    <script src="../JS/admin/popper.min.js"></script>
    <script src="../JS/admin/bootstrap.min.js"></script>
    <script src="../JS/admin/jquery.sticky.js"></script>
    <script src="../JS/admin/main.js"></script>
</body>
</html>