<?php
require('../Controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$category = select_one_category_controller($_GET['updateCategoryID']);
session_start(); 
?>

<html>

<head>
    <title>Add Brand</title>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../CSS/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../Images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/admin/util.css">
    <link rel="stylesheet" type="text/css" href="../css/admin/main.css">
    <!--===============================================================================================-->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" href="../css/admin/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/admin/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../css/admin/style.css">

    <style>
        body {
            margin: 1 0%;
            text-align: left;
        }

        h3 {
            text-align: center;
        }
    </style>
    </head>
   <body style="background-color: #1f196e">

  <?php 
//Includes the menu file 

include_once 'admin_menu.php';
?>
 <br>
    <br>

    <div class="limiter">

        <div class="containerdataentry">
            <div class="wrap-dataentry">
                <h1> Add Brand</h1>
                <br>
                <!--Form used to add a new skill-->
                <form method="post" action="../Actions/category_action.php" onSubmit="alert('When you click ok ,the category name will be updated to the new value!')">
                    <label for="brand"> Please enter the new category name </label><br>
                    <input class="input100" type="text" name="category" id="category" value="<?php echo $category['cat_name'] ?>" required>
                    <br>

                     <input class="form-control" type="hidden"  name="ID" value="<?php echo $category['cat_id'] ?>">
                     <br>
                    <div class="container-submit100-form-btn"></div>
                    <input class="login100-form-btn" type="submit" name="editcategory" value="submit">
                   
                    <br>
                    <br>
                </form>
                <br>
               
            </div>
        </div>


        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
        <script src="../JS/function.js"></script>





       
        </div>
</body>
</html>