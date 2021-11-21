<?php
session_start(); 
if (isset($_SESSION['ID'] )) {
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
  include_once('menu.php');
  
    require('../Controllers/cart_controller.php');
    require('../Classes/product_functions.php');
    $custID=$_SESSION["ID"];
    $ip_addr = $_SERVER["REMOTE_ADDR"]; 
    $updateID= update_ID_controller($custID,$ip_addr);
    $cart=select_cart_by_cid_controller($custID);
    $itemcount=count($cart)
  ?>
          
  
  
  <!-- Content -->
  <div id="content"> 
    
    <!--======= PAGES INNER =========-->
    <section class="chart-page padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="shopping-cart"> 
          
          <!-- SHOPPING INFORMATION -->
          <div class="cart-ship-info">
            <div class="row"> 
              
              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-7">
                <h6>BILLING DETAILS</h6>
                <form>
                  <ul class="row">
                    
                    <!-- Name -->
                    <li class="col-md-6">
                      <label> *FIRST NAME
                        <input type="text" name="first-name" value="" placeholder="">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *LAST NAME
                        <input type="text" name="last-name" value="" placeholder="">
                      </label>
                    </li>
                    <li class="col-md-6"> 
                      <!-- COMPANY NAME -->
                      <label>COMPANY NAME
                        <input type="text" name="company" value="" placeholder="">
                      </label>
                    </li>
                    <li class="col-md-6"> 
                      <!-- ADDRESS -->
                      <label>*ADDRESS
                        <input type="text" name="address" value="" placeholder="">
                      </label>
                    </li>
                    <!-- TOWN/CITY -->
                    <li class="col-md-6">
                      <label>*TOWN/CITY
                        <input type="text" name="town" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- COUNTRY -->
                    <li class="col-md-6">
                      <label> COUNTRY
                        <input type="text" name="contry-state" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- EMAIL ADDRESS -->
                    <li class="col-md-6">
                      <label> *EMAIL ADDRESS
                        <input type="text" name="contry-state" value="" placeholder="">
                      </label>
                    </li>
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <label> *PHONE
                        <input type="text" name="postal-code" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <button type="submit" class="btn">continue</button>
                    </li>
                    
                    <!-- CREATE AN ACCOUNT -->
                    <li class="col-md-6">
                      <div class="checkbox margin-0 margin-top-20">
                        <input id="checkbox1" class="styled" type="checkbox">
                        <label for="checkbox1"> Ship to a different address </label>
                      </div>
                    </li>
                  </ul>
                </form>
                
                <!-- SHIPPING info -->
                <h6 class="margin-top-50">SHIPPING info</h6>
                <form>
                  <ul class="row">
                    
                    <!-- Name -->
                    <li class="col-md-6">
                      <label> *FIRST NAME
                        <input type="text" name="first-name" value="" placeholder="">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *LAST NAME
                        <input type="text" name="last-name" value="" placeholder="">
                      </label>
                    </li>
                    <li class="col-md-6"> 
                      <!-- COMPANY NAME -->
                      <label>COMPANY NAME
                        <input type="text" name="company" value="" placeholder="">
                      </label>
                    </li>
                    <li class="col-md-6"> 
                      <!-- ADDRESS -->
                      <label>*ADDRESS
                        <input type="text" name="address" value="" placeholder="">
                      </label>
                    </li>
                    <!-- TOWN/CITY -->
                    <li class="col-md-6">
                      <label>*TOWN/CITY
                        <input type="text" name="town" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- COUNTRY -->
                    <li class="col-md-6">
                      <label> COUNTRY
                        <input type="text" name="contry-state" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- EMAIL ADDRESS -->
                    <li class="col-md-6">
                      <label> *EMAIL ADDRESS
                        <input type="text" name="contry-state" value="" placeholder="">
                      </label>
                    </li>
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <label> *PHONE
                        <input type="text" name="postal-code" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <button type="submit" class="btn">SUBMIT</button>
                    </li>
                  </ul>
                </form>
              </div>
              
              
                
                <div class='col-sm-5'>
                <h6>YOUR ORDER</h6>
                <div class='order-place'>
                  <div class='order-detail'>
                  <?php
                  if ($itemcount > 0 ){
                  $sum = 0;
                  foreach ($cart as $x){
                    $pid=$x['p_id'];
                    $item_name=$x['product_name'];
                    $price=$x['product_price'];
                    $qty=$x['qty'];
                    $email=$_SESSION['email'];
                    $item_total=item_total($price,$qty);
                    $sum += $item_total;
                    
                   
                       
                    echo " <p>$item_name <span> GHC $item_total </span></p> "; }
                    global $sum;
                    echo "
                    <!-- SUB TOTAL -->
                                  <form id= 'paymentForm'>
                                        
                                        <!-- SUB TOTAL -->
                                        <p class='all-total' >TOTAL COST <span> GHC  $sum</span></p>
                                        
                                      </div>
                                      <input class='form-control' type='hidden'  name='email' id='email' value= $email >
                                      <input class='form-control' type='hidden'  name='total' id='total' value= $sum >
                                      <input class='form-control' type='hidden'  name='qty' id ='qty' value= $qty >
                                      <input class='form-control' type='hidden'  name='pid' id='pid' value=  $pid >
                                      
                                        <button class='btn  btn-dark pull-right margin-top-30' type='submit' onclick='payWithPaystack()'> Pay </button></div>
                                        </form>
                                     ";
                    
                      
                     
                
                }else {
                   echo " <p class='all-total' id='total_1'>There are no items in your cart </p> ";}
                   ?>

                    </div>
                  
              </div>
            </div>
            </div>
                          </div>
                        </section>
    <!-- About -->
    <section class="small-about padding-top-150 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>about PAVSHOP</h4>
          <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odio luctus non. Nulla lacinia,
            eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
        </div>
        
        <!-- Social Icons -->
        <ul class="social_icons">
          <li><a href="#."><i class="icon-social-facebook"></i></a></li>
          <li><a href="#."><i class="icon-social-twitter"></i></a></li>
          <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
          <li><a href="#."><i class="icon-social-youtube"></i></a></li>
          <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
        </ul>
      </div>
    </section>
    
    <!-- News Letter -->
    <section class="news-letter padding-top-150 padding-bottom-150">
      <div class="container">
        <div class="heading light-head text-center margin-bottom-30">
          <h4>NEWSLETTER</h4>
          <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odi </span> </div>
        <form>
          <input type="email" placeholder="Enter your email address" required>
          <button type="submit">SEND ME</button>
        </form>
      </div>
    </section>
  </div>
  
 
  
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

	<!-- PAYSTACK INLINE SCRIPT -->
<script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
	const paymentForm = document.getElementById('paymentForm');
	paymentForm.addEventListener("submit", payWithPaystack, false);

	// PAYMENT FUNCTION
	function payWithPaystack(e) {
		e.preventDefault();
		let handler = PaystackPop.setup({
			key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
      email: document.getElementById("email").value,
      qty: document.getElementById("qty").value,
      pid: document.getElementById("pid").value,
	    amount: document.getElementById("total").value * 100,
			currency:'GHS',
			onClose: function(){
			alert('Window closed.');
			},
			//sent email
			callback: function(response){
        window.location = `../Actions/payment_action.php?email=${document.getElementById("email").value}&amount=${document.getElementById("total").value}&reference=${response.reference}&date=${response.transaction_date}&currency=${response.currency}`
			}
		});
		handler.openIframe();
	};

</script>

</body>
</html>

<?php
} else {
  header("Location:login.php");
}
?>