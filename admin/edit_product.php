<?php
require('../Controllers/product_Controller.php');
$categories = select_all_categories_controller();
$brands = select_all_brands_controller();
$product = select_one_product_controller($_GET['updateProductID']);
$images=select_images_controller($_GET['updateProductID']);
session_start();
?>

<html>

<head>
    <title>Add Products</title>
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
                <h1> Update product </h1>
                <br>
                <!--Form used to add a new skill-->
                <form method="post" action="../Actions/product_action.php" enctype="multipart/form-data" onSubmit="alert('When you click ok ,the selecte changes will be applied in database!') ">
                <label for="brand"> Brand Name </label>
                    <?php 
                    $brand_id=$product['product_brand'];
                    $brand_name=$product['brand_name'];
                    

                //Loops through database array and prints the brand name from the records in the database in a select
                        echo "<select name ='brand' class='input100'  >
                        <option value =$brand_id>$brand_name</option>";
 
		                foreach($brands as $y){
		                
		                    echo "<option value =$y[brand_id]>$y[brand_name] </option>";
                        }
 
		                echo '</select>';
 
			        ?>
                    <br>
                    <label for="brand"> Category Name </label>
                    <?php 
                    $cat_id=$product['product_cat'];
                    $category_name = $product['cat_name'];

                //Loops through database array and prints categories name from the records in the database in a select
                        echo "<select name ='category' class='input100' >
                        <option value =$cat_id>$category_name</option>";
 
		                foreach($categories as $x){
		                
		                    echo "<option value =$x[cat_id]>$x[cat_name] </option>";
                        }
 
		                echo '</select>';
 
			        ?>
                    <br>

                    <label for="title">Product Title </label><br>
                    <input class="input100" type="text" name="title" id="title" required value="<?php echo $product['product_name'] ?>">
                    <br>

                    
                    <label for="price">Price </label><br>
                    <input class="input100" type="number" name="price" id="price" value="<?php echo $product['product_price'] ?>" required>
                    <br>

                    <label for="desc">Product Description </label><br>
                    <input class="input100" type="text" name="desc" id="desc" value="<?php echo $product['product_desc'] ?>"  required>
                    <br>


                    <label for="keywords">Product keywords</label><br>
                    <input class="input100" type="text" name="kwords" id="kwords" value="<?php echo $product['product_keywords'] ?>" required >
                    <input class="form-control" type="hidden"  name="ID" value="<?php echo $product['product_id'] ?>">
                    <br>
                    <label for="fileToUpload">The following are the current product images, you can add or delete</label><br>
                    <!-- Displays product images-->
                    <?php foreach ($images as $i){
                        $image_file=$i['image_path'];
			        	$image_string= explode("/",$image_file);
				        $image_name= end ($image_string);
                        $image_id=$i['image_id'];
                        echo" <p> $image_name <a href='../Actions/product_action.php?deleteImageID={$image_id}&productID={$_GET['updateProductID']}'><i class='fas fa-times-circle'></i></a> </p> ";
                    } ?>
                    <input class="input100" type="file" name="fileToUpload" id="fileToUpload" >
                    <br>

                    <div class="container-submit100-form-btn"></div>
                    <button class="login100-form-btn" name="editproduct">
                    Update
						</button>
                    
                </form>
                <br>
                <?php
                   if (isset($_GET["error"]) && $_GET["error"]==0)
                   echo ' <div class="alert alert-danger" role="alert"> The uploaded item is not an image, please select an image</div>' ;
                   if (isset($_GET["error"]) && $_GET["error"]==1)
                              echo ' <div class="alert alert-danger" role="alert">The uploaded image is already in use for another product. Please select another image</div>' ;
                   if (isset($_GET["error"]) && $_GET["error"]==2)
                           echo ' <div class="alert alert-danger" role="alert"> Uploaded image size cannot be greater than 5 MB<br></div>' ;
                   if (isset($_GET["error"]) && $_GET["error"]==3)
                           echo ' <div class="alert alert-danger" role="alert"> Only .jpg, .jpeg, GIF and .png file types are allowed for the product image<br></div>' ;
                   if (isset($_GET["error"]) && $_GET["error"]==4)
                           echo ' <div class="alert alert-danger" role="alert">   Product addition to database failed, please try again<br></div>' ;
                   if (isset($_GET["error"]) && $_GET["error"]==5)
                           echo ' <div class="alert alert-danger" role="alert">There was an error uploading product image to database, please try again<br></div>' ;
               ?>
            </div>
        </div>


        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
        <script src="../JS/function.js"></script>





       
        </div>
</body>
</html>