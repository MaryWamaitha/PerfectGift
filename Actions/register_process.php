<?php

require('../Controllers/customer_controller.php');

// check if theres a POST variable with the name 'savecustomer'
if(isset($_POST['signup'])){
    // retrieve the details from the form submission
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $re_password=$_POST['re_password'];
    
    
    
    
    if ($pass===$re_password ){
      //call the check email controller
      $duplicate = select_customer_email_controller($email);
      $password = password_hash($pass, PASSWORD_DEFAULT);
      if($duplicate) {
        header( "Location: ../view/login.php?error=2");
       }else {
            $result = add_customer_controller($fname, $lname, $email,$password);
            // call the add_customer_controller function: return true or false
            if($result === true) {
              header("Location: ../view/login.php");
            } else {
              header("Location: ../view/register.php?error=0");
            }
        }
    }else{
      header("Location: ../view/register.php?error=1");
    }
  }
  
    



if(isset($_GET['deletecustomerID'])){

    $id = $_GET['deletecustomerID'];

    // call the function
    $result = delete_customer_controller($id);

    if($result === true) header("Location: ../views/index.php");
    else echo "deletion failed";


}


// updating
if(isset($_POST['updatecustomerButton'])){
    // retrieve the name, description, id and quantity from the form submission
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $qty = $_POST['qty'];
    $id=$_POST['id'];
    

    // call the update_customer_controller function: return true or false
    $result = update_customer_controller($id,$name,$desc,$qty);


    if($result === true) header("Location: ../views/index.php");
    else echo "insertion failed";

}





?>



