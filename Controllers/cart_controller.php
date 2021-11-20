<?php


require('../Classes/cart_class.php');



//Cart 
//adding to cart when not logged in
function add_to_cart_controller($p_id,$qty,$ip_add){
    // create an instance of the category class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->add_to_cart($p_id,$qty,$ip_add);


}

//Quick Add
function quick_add_controller($p_id,$ip_add,$cid,$qty){
    // create an instance of the category class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->quick_add($p_id,$ip_add,$cid,$qty);


}

//update cart with customer ID 
function update_ID_controller($CID,$ip_add){
    // create an instance of the category class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->update_ID($CID,$ip_add);

}


function select_cart_by_ip_controller($ip_add){
    // create an instance of the category class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->select_cart_by_ip($ip_add);


}

function select_cart_by_cid_controller($CID){
    // create an instance of the category class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->select_cart_by_cid($CID);


}

function select_product_incart_controller($p_id){
    // create an instance of the category class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->select_product_incart($p_id);


}

//updating quantity
function update_quantity_controller($PID, $quantity){
    // create an instance of the category class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->update_quantity($PID, $quantity);


}

function delete_product_fromcart_controller($id){
    // create an instance of the category class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->delete_product_fromcart($id);


}



//ORDERS
//adding to orders table

function add_order_controller($customer_id, $invoice_no, $order_date, $order_status){
    //create instance of the cart class
    $cart_instance = new Cart();
    //calls method from cart class
    return $cart_instance->add_order($customer_id, $invoice_no, $order_date, $order_status);
}

function add_order_details_controller($order_id, $product_id, $qty){
    //create instance of the cart class
    $cart_instance = new Cart();
    //calls method from cart class
    return $cart_instance->add_order_details($order_id, $product_id, $qty);
}

function get_last_order_controller(){
    //create instance of the cart class
    $cart_instance = new Cart();
    //calls method from cart class
    return $cart_instance->get_last_order();
}

//adding to payments table
function payment_cart_controller($amount,$customer_id,$order_id,$currency,$payment_date){
    //create instance of the cart class
    $cart_instance = new Cart();
    //calls method from cart class
    return $cart_instance->payment_cart($amount,$customer_id,$order_id,$currency,$payment_date);
}

function clear_cart_controller($CID){
    //create instance of the cart class
    $cart_instance = new Cart();
    //calls method from cart class
    return $cart_instance->clear_cart($CID);
}


function select_order_controller($order_id){
    //create instance of the cart class
    $cart_instance = new Cart();
    //calls method from cart class
    return $cart_instance->select_order($order_id);
}


function select_orderDetails_controller($order_id){
    //create instance of the cart class
    $cart_instance = new Cart();
    //calls method from cart class
    return $cart_instance->select_orderDetails($order_id);
}

//selecting user who made order

function select_order_user_controller($CID,$order_id){
    //create instance of the cart class
    $cart_instance = new Cart();
    //calls method from cart class
    return $cart_instance->select_user($CID,$order_id);
}

function select_payment_controller($order_id){
    //create instance of the cart class
    $cart_instance = new Cart();
    //calls method from cart class
    return $cart_instance->select_payment($order_id);
}




?>