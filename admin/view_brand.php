<?php
session_start();
require('../Controllers/product_Controller.php');
// return array of all rows, or false (if it failed)
$brands = select_all_brands_controller();
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Table 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/Table/style.css">
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
    
	

	</head>
<body style="background-color: #1f196e">

  <?php 
//Includes the menu file 

include_once 'admin_menu.php';

?>
 <br>
    <br>
	<section class="ftco-section">
		<div class="box">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 style="color: white">Edit Brands</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      
						      <th>Brand Name</th>
						      <th>Update</th>
						      <th>Delete</th>
						    </tr>
						  </thead>
						  <tbody>
			<?php
			foreach($brands as $x){
				echo 
				"
				<tr>
					<td>{$x['brand_name']}</td>
					
					<td><a href='edit_brand.php?updateBrandID={$x['brand_id']}'>Update</a></td>
					<td><a href='../Actions/brand_action.php?deleteBrandID={$x['brand_id']}'>Delete</td>
					
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

