<?php
session_start();
require('../Controllers/product_Controller.php');
// return array of all rows, or false (if it failed)
$product = select_all_products_controller();
$category = select_all_categories_controller();

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>View and Edit Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../CSS/Table/style.css">
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
    
	

	</head>
<body style="background-color: #1f196e">

  <?php 
//Includes the menu file 

include_once 'admin_menu.php';

?>
<br>
<br>
<br>
	<section class="ftco-section">
		<div class="table_container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 style="color: white">PRODUCTS</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      
						      <th>Brand Name</th>
						      <th>Category</th>
						      <th>Product Title</th>
							  <th>Product Price</th>
							  <th>Product Description</th>
							
							  <th>Product Keywords</th>
						      <th>Update</th>
						      <th>Delete</th>
						    </tr>
						  </thead>
						  <tbody>
			<?php
			foreach($product as $x){
				$brand_id=$x['product_brand'];
				$brand = select_one_brand_controller($brand_id);
				$brand_name=$brand['brand_name'];
				$cat_id=$x['product_cat'];
				$cat = select_one_category_controller($cat_id);
				$category_name = $cat['cat_name']; 
				
				
				echo 
				"
				<tr>
					<td>{$brand_name}</td>
					<td>{$category_name}</td>
					<td>{$x['product_name']}</td>
					<td>{$x['product_price']}</td>
					<td>{$x['product_desc']}</td>
					<td>{$x['product_keywords']}</td>
					<td><a href='edit_product.php?updateProductID={$x['product_id']}'>Update</a></td>
					<td><a href='delete_product.php?deleteProductID={$x['product_id']}'>Delete</td>
					
				</tr>
				";
			}

			?>

		
        </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
    
	<script src="../JS/Table/jquery.min.js"></script>
  <script src="../JS/Table/popper.js"></script>
  <script src="../JS/Table/bootstrap.min.js"></script>
  <script src="../JS/Table/main.js"></script>

	</body>
</html>

