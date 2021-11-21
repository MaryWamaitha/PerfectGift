<?php

require('../Controllers/product_Controller.php');
session_start();
$product = select_one_product_controller($_GET['PID']);
$brand_name=$product['brand_name'];
$category_name = $product['cat_name'];
$item_name=$product['product_name'];
$price=$product['product_price'];
$Description=$product['product_desc'];
$ID= $product['product_id']; 
$images=select_images_controller($ID);
$firstItem = reset($images);
$product_image=$firstItem['image_path'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>PAVSHOP - Multipurpose eCommerce HTML5 Template</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="../css/Template/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href='../css/Template/font-awesome.min.css' rel="stylesheet" type="text/css">

<link href='../css/Template/main.css' rel='stylesheet'>
<link href='../css/Template/style.css' rel='stylesheet'>
<link href='../css/Template/responsive.css' rel='stylesheet'>

<script src="https://kit.fontawesome.com/bb731240c4.js" crossorigin="anonymous"></script>

<!-- JavaScripts -->
<script src="../JS/Template/modernizr.js"></script>

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type='text/css'>


<!-- HTML5 Shim and Respond.js IE8 qsupport of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<?php 
if (isset($_SESSION['ID'] )) {
	include_once 'menu.php';
} else {
	include_once '../menu.php';
}
?>
 
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Popular Products -->
    <section class="padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- SHOP DETAIL -->
        <div class="shop-detail">
          <div class="row"> 
            
            <!-- Popular Images Slider -->
            <form action = "../Actions/cart_action.php" method ="get">
            <div class="col-md-7"> 
              <?php 
              
              echo "
              <!-- Images Slider -->
              <div class='images-slider>
                <ul class='slides'>
                  <li data-thumb='$product_image'> <img class='img-responsive' src='$product_image'  alt=''> </li>
                  <input class='form-control' type='hidden'  name='ID' value='$ID'>
                
                </ul>
              </div>
            </div>
            
            <!-- COntent -->
            <div class='col-md-5'>
              <h4>$item_name</h4>
              <span class='price'><small>KSH</small>$price</span> 
             
              <ul class='item-owne'>
                <li>Category :<span> $category_name</span></li>
                <li>Brand:<span> $brand_name</span></li>
              </ul>
              
              <!-- Item Detail -->
			  <span class='label-input100'>Any specific requirements you would like with the package? Eg handrwitten card, specific gift bag wrapping preferences?</span>
			  <input  type='text' name='details' placeholder='I would like...'>
              
              <!-- Short By -->
              <div class='some-info'>
                <ul class='row margin-top-30'>
                  <li class='col-xs-4'>
                    <div class='quinty'> 
                      <!-- QTY -->
                      <select class='selectpicker' name= 'quantity' required>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='4'>4</option>
						<option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                      </select>
                    </div>
					
                  </li> ";
                  
                  ?>
				 
                  <!-- ADD TO CART -->
                  <li class="col-xs-6"> <button type="submit" name='cart' id ='cart' class="btn"> Add to Cart </button> </li>
                  
                 
                </ul>
            </form>
                
                <!-- INFOMATION -->
                <div class="inner-info">
                  <h6>DELIVERY INFORMATION</h6>
                  <p>The delivery timeline will be shared with you once the order is confirmed</p>
                  
                  
                
                  <?php
                  if (isset($_GET["error"]) && $_GET["error"]==0)
                    echo ' <div class="alert alert-danger" role="alert"> The item was not successfully added to cart, please try again</div>' ;
                   
					
                ?>
                </div>
              
          </div>
        </div>
        
        <!--======= PRODUCT DESCRIPTION =========-->
        <div class="item-decribe"> 
          <!-- Nav tabs -->
          <ul class="nav nav-tabs animate fadeInUp" data-wow-delay="0.4s" role="tablist">
            <li role="presentation" class="active"><a href="#descr" role="tab" data-toggle="tab">DESCRIPTION</a></li>
            <li role="presentation"><a href="#review" role="tab" data-toggle="tab">REVIEW (03)</a></li>
            <li role="presentation"><a href="#tags" role="tab" data-toggle="tab">INFORMATION</a></li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content animate fadeInUp" data-wow-delay="0.4s"> 
            <!-- DESCRIPTION -->
            <div role="tabpanel" class="tab-pane fade in active" id="descr">
               <?php echo"<p>$Description <br>"; ?>
              </p>
              
          
              
            
            </div>
         
          </div>
		  </div>
        </div>
      </div>
    </section>
    
  
    
  
    
    
  <!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="../images/logoperfectgift.png" alt="#"></a>
							</div>
							<p class="text"> Customers can reach a wide variety of products all in one place, and can also purchase generalised products.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel: +233 549272053">+ 233 549272053</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - East Legon Street.</li>
									<li>Ghana</li>
									<li>pefectgift@gmail.com</li>
									<li>+233 549272053</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
  
 <!--======= RIGHTS =========--> 
  
  
</div>
<script src="../JS/Template/jquery-1.11.3.min.js"></script> 
<script src="../JS/Template/bootstrap.min.js"></script> 
<script src="../JS/Template/own-menu.js"></script> 
<script src="../JS/Template/jquery.lighter.js"></script> 
<script src="../JS/Template/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script> 
<script src="../JS/Template/main.js"></script> 
<script src="../JS/Template/main.js"></script>

</body>
</html>