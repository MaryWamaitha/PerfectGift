<?php
session_start();
require('../Controllers/customer_controller.php');

// check if theres a POST variable with the name 'savecustomer'
if(isset($_POST['login'])){
    // retrieve the details from the form submission
    $email = $_POST['email'];
    $password = $_POST['password'];

    
   
    //call the check email controller
    $details = select_customer_details_controller($email);
    

    if($details==false) {
               header("Location: ../View/login.php?error=0");
            } else {
                $passw=$details['customer_pass'];
                
                if (password_verify($password,$passw)===true ){
                    //Set the session
                
                    $ID=$details['customer_id'];
                    $name=$details['customer_Fname'];
                    $role=$details['role'];
                    $email=$details['customer_email'];
                    $_SESSION["ID"] = $ID;
                    $_SESSION["email"] = $email;
                    $_SESSION["role"] = $role;
                    $_SESSION["name"] = $name;
                    if ($_SESSION['role'] == 1){
                        // redirects to brand view page
                       header("Location: ../admin/dashboard/index.php");
                       } else{
                    
                            header("Location: ../view/loggedindex.php");
                       }         
                    } else {
                    header("Location: ../view/login.php?error=1");
                }
        
             }
    
            
}








?>



