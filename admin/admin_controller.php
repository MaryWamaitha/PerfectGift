<?php

require('admin_class.php');



function select_all_orders_controller(){
    // create an instance of the admin class
    $customer_instance = new Admin();
    // call the method from the class
    return $customer_instance->select_all_orders();

}

function select_count_orders_controller(){
    // create an instance of the admin class
    $customer_instance = new Admin();
    // call the method from the class
    return $customer_instance->select_count_orders();

}
function select_count_customers_controller(){
    // create an instance of the admin class
    $customer_instance = new Admin();
    // call the method from the class
    return $customer_instance->select_count_customers();

}
function select_count_sales_controller(){
    // create an instance of the admin class
    $customer_instance = new Admin();
    // call the method from the class
    return $customer_instance->select_count_sales();

}
function select_count_products_controller(){
    // create an instance of the admin class
    $customer_instance = new Admin();
    // call the method from the class
    return $customer_instance->select_count_products();

}

//updating order status

function select_one_order_controller($order_id){
    // create an instance of the Product class
    $customer_instance = new Admin();
    // call the method from the class
    return $customer_instance->select_one_order($order_id);

}

function update_orderstatus_controller($order_id, $customer_id, $invoice_no, $order_date, $order_status){
    // create an instance of the Admin class
    $customer_instance = new Admin();
    // call the method from the class
    return $customer_instance->update_product_status($order_id, $customer_id, $invoice_no, $order_date, $order_status);

}


?>