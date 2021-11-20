<?php
session_start();
require('../Controllers/product_controller.php');
// check if theres a POST variable with the name 'save'
if(isset($_POST['savebrand'])){
    // retrieve the details from the form submission
    $brand= $_POST['brand'];
   
    //call the check brand controller
    $duplicate = select_brand_details_controller($brand);
    
    
    //Checks if any results came from the query checking duplicate and if nothing came back it means there is no duplicate
    if($duplicate) {
    header("Location: ../Admin/add_brand.php?error=0");
    } else {
    //Adds the new brand to the database
        $result = add_brand_controller($brand);
        //If this is successful, it redirects back to the Admin home page
        if($result === true){
        header("Location: ../Admin/view_brand.php");
        //if the insertion did not happen successfully, it redirects back to the admin page and shows an error
            }else {
            header("Location: ../Admin/add_brand.php?error=1");
        } 
        //If there was a duplicate and hence the duplicate variable was not false, it redirects back to 
     }
       
            
            



}


// updating
if(isset($_POST['editbrand'])){
    // retrieve the name, id  from the form submission
    $brand_name = $_POST['brand'];
    $brand_id=$_POST['ID'];
    

    // call the update brand_controller function: return true or false
    $result = update_brand_controller($brand_id,$brand_name);


    if($result === true) header("Location: ../Admin/view_brand.php");
    else echo "insertion failed";

}


//deletion

if(isset($_GET['deleteBrandID'])){

    $id = $_GET['deleteBrandID'];

    // call the function
    $result =  delete_brand_controller($brand_id);

    if($result === true) header("Location: ../admin/dashboard/index.php");
    else echo "deletion failed";


}




?>



