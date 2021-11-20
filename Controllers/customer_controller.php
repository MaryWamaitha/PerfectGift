<?php

require('../Classes/customer_class.php');

function add_customer_controller($fname,$lname,$email,$password){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->add_customer($fname,$lname,$email,$password);

}

function delete_customer_controller($id){
    // create an instance of the customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->delete_one_customer($id);

}

function update_customer_controller($id, $name, $description, $qty){
    // create an instance of the customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->update_one_customer($id, $name, $description, $qty);

}

function select_all_customers_controller(){
    // create an instance of the customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_all_customers();

}

function select_one_customer_controller($id){
    // create an instance of the customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_one_customer($id);

}

function select_customer_email_controller($email){
    // create an instance of the customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_customer_email($email);

}

function select_customer_details_controller($email){
    // create an instance of the customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_customer_details($email);

}



?>