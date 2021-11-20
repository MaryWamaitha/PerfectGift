<?php
session_start();
require('../controllers/product_controller.php');
// check if theres a POST variable with the name 'save'
if(isset($_POST['savecategory'])){
    // retrieve the details from the form submission
    $category= $_POST['category'];
   
    //call the check category controller
    $duplicate = select_category_details_controller($category);
    
    
    //Checks if any results came from the query checking duplicate and if nothing came back it means there is no duplicate
    if($duplicate) {
    header("Location: ../admin/add_category.php?error=0");
    } else {
    //Adds the new category to the database
        $result = add_category_controller($category);
        
        //If this is successful, it redirects back to the Admin home page
        if($result === true){
        header("Location: ../admin/view_category.php");
        //if the insertion did not happen successfully, it redirects back to the admin page and shows an error
            }else {
            header("Location: ../admin/add_category.php?error=1");
        } 
        
     }
       
            
            



}


// updating
if(isset($_POST['editcategory'])){
    // retrieve the name, id  from the form submission
    $category_name = $_POST['category'];
    $category_id=$_POST['ID'];
    

    // call the update category_controller function: return true or false
    $result = update_category_controller($category_id,$category_name);


    if($result === true) header("Location: ../Admin/view_category.php");
    else echo "insertion failed";

}


//deletion

if(isset($_GET['deleteCategoryID'])){

    $id = $_GET['deleteCategoryID'];

    // call the function
    $result =  delete_brand_controller($brand_id);

    if($result === true) header("Location: ../admin/dashboard/index.php");
    else echo "deletion failed";


}




?>



