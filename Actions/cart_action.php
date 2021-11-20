<?php
session_start();
//Gets cart variables from product detail page
require('../Controllers/cart_controller.php');

if(isset($_POST['pid'])&& ($_POST['new_quantity'])){
    $pid=$_POST['pid'];
    $qty=$_POST['new_quantity'];
    // call the function
    $result = update_quantity_controller($pid,$qty);

    if($result === true) header("Location: ../View/shopping_cart.php");
    else echo "deletion failed";


}

// check if theres a GET variable with the name 'cart'
if(isset($_GET['cart'])){
    $qty = $_GET['quantity'];
    $PID = $_GET['ID'];
    $ip_address = $_SERVER["REMOTE_ADDR"]; 
    
    $product=select_product_incart_controller($PID);
    
    if(empty($product) ){
        $result= add_to_cart_controller($PID,$qty,$ip_address);
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

  
}

if(isset($_GET['deleteProductID'])){

    $id = $_GET['deleteProductID'];

    // call the function
    $result = delete_product_fromcart_controller($id);

    if($result === true) header("Location: ../view/cart.php");
    else echo "deletion failed";


}

if(isset($_GET['AddProduct'])){
$PID=$_GET['AddProduct'];
$ip_address = $_SERVER["REMOTE_ADDR"]; 
$CID=$_SESSION['ID'];
$qty=1;

    
    $product=select_product_incart_controller($PID);
    
    if(empty($product) ){
        $result= quick_add_controller($PID,$ip_address,$CID,$qty);
        if($result === true){
            $url=$_SERVER['HTTP_REFERER'];
            header("Location:$url");
        } else {
             echo "adding failed";
        }
       
    } else {
        $quantity = $product['qty']+$qty;
        $update=update_quantity_controller($PID, $quantity);
        header("Location: ../View/product_added.php?qty=$quantity&&PID=$PID&&alert=2");
    }
}







       




?>



