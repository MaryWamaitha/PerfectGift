<?php
//Gets cart variables from product detail page
require('../Controllers/product_controller.php');
session_start();
$PID=$_GET['PID'];
$ip_address = $_SERVER["REMOTE_ADDR"]; 
$CID=$_SESSION['ID'];
    
    $product=select_product_incart_controller($PID);
    
    if(empty($product) ){
        $result= add_to_cart_controller($PID,$ip_address,$CID);
        if($result === true){
            header("Location: ../View/product_added.php?qty=$qty&&PID=$PID&&alert=1");
        } else {
            header("Location: ../View/product_detail.php?error=0&&PID=$PID");
        }
       
    } else {
        $quantity = $product['qty']+$qty;
        $update=update_quantity_controller($PID, $quantity);
        header("Location: ../View/product_added.php?qty=$quantity&&PID=$PID&&alert=2");
    }





?>



