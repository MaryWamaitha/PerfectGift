<?php

require('../Controllers/product_controller.php');

// check if theres a POST variable with the name 'addProductButton'
if(isset($_POST['saveproduct'])){
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $keywords = $_POST['kwords'];

    // File upload path
    $target_dir='../images/Products/';
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check == false) {
    
        header("Location: ../admin/add_product.php?error=0");
        $uploadOk = 0;
    
     } else {

            // Check if file already exists
            if (file_exists($target_file)) {
                header("Location: ../admin/add_product.php?error=1");
                $uploadOk = 0;
            }  else {

                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 5000000) {
                        header("Location: ../admin/add_product.php?error=2");
                        $uploadOk = 0;
                    } else {
                       
                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                            header("Location: ../admin/add_product.php?error=3");
                            $uploadOk = 0;
                        } else {


                            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                                $result = add_product_controller($title,$category,$brand,$price,$desc,$colour,$keywords);
                                if ($result=== true){
                                    $recent_product = get_last_product_controller();
                                    $image=$target_file;
                                    $add_image=add_image_controller($recent_product['currentProduct'],$image);
                                    if ($add_image===true){
                                        header("Location: ../admin/add_product.php");
                                    } else {
                                        header("Location: ../admin/add_product.php?error=5");
                                    }

                                } else {
                                    header("Location: ../admin/add_product.php?error=4");
                                }
                                }
                            }
                    } 
            }
 }       }



//deletion

if(isset($_GET['deleteProductID'])){

    $id = $_GET['deleteProductID'];

    // call the function
    $result = delete_product_controller($id);

    if($result === true) header("Location: ../admin/dashboard/index.php");
    else echo "deletion failed";


}


// updating
if(isset($_POST['editproduct'])){
    // retrieve the name, description, id and quantity from the form submission
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $keywords = $_POST['kwords'];
    $product_id=$_POST['ID'];
    $image=basename($_FILES['fileToUpload']['name']);
    //checks if any image was added
    if (empty( $image)){
      // call the update_product_controller function: return true or false
    $add= update_product_controller($title,$product_id,$category,$brand,$price,$desc,$keywords);
                                   
    if ($add=== true){
        header("Location: ../admin/view_products.php");
            } else {
                 header("Location: ../View/edit_product.php?error=4&updateProductID=$product_id ");
                 }
    }else{
        // File upload path
    $target_dir='../images/Products/';
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check == false) {
    
        header("Location: ../admin/edit_product.php?error=0&updateProductID=$product_idgit ");
        $uploadOk = 0;
    
     } else {

            // Check if file already exists
            if (file_exists($target_file)) {
                header("Location: ../admin/edit_product.php?error=1&updateProductID=$product_id");
                $uploadOk = 0;
                }  else {

                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 12000000) {
                        header("Location: ../admin/edit_product.php?error=2&updateProductID=$product_id");
                        $uploadOk = 0;
                    } else {
                       
                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                            header("Location: ../admin/edit_product.php?error=3&updateProductID=$product_id");
                            $uploadOk = 0;
                        } else {


                            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                                $result=update_product_controller($title,$product_id,$category,$brand,$price,$desc,$keywords);
                                if ($result=== true){
                                    $image=$target_file;
                                    $add_image=add_image_controller($product_id,$image);
                                    if ($add_image===true){
                                        header("Location: ../admin/edit_product.php?updateProductID=$product_id");
                                    } else {
                                        header("Location: ../admin/edit_product.php?error=5");
                                    }

                                } else {
                                    header("Location: ../admin/edit_product.php?error=4");
                                }
                                }
                            }
                        } 
                }
        }     
     }
                                  
}

if(isset($_GET['deleteImageID'])){

    $id = $_GET['deleteImageID'];
    $pid= $_GET['productID'];
    // call the function
    $result = delete_image_controller($id);

    if($result === true) header("Location: ../admin/edit_product.php?updateProductID=$pid");
    else echo "deletion failed";


}



?>