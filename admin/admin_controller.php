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


?>