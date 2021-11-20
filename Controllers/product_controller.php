<?php

require('../Classes/product_class.php');


//Brand
function add_brand_controller($brand){
    // create an instance of the brand class
    $brand_instance = new Brand();
    // call the method from the class
    return $brand_instance->add_brand($brand);

}

function select_brand_details_controller($brand){
    // create an instance of the brand class
    $brand_instance = new Brand();
    // call the method from the class
    return $brand_instance->select_brand_details($brand);
    }
function select_all_brands_controller(){
    // create an instance of the brand class
    $brand_instance = new Brand();
    // call the method from the class
    return $brand_instance->select_all_brands();
    }
function update_brand_controller($brand_id, $brand_name){
    // create an instance of the brand class
    $brand_instance = new Brand();
    // call the method from the class
    return $brand_instance->update_one_brand($brand_id, $brand_name);
    }
 function select_one_brand_controller($brand_id){
    // create an instance of the brand class
    $brand_instance = new Brand();
    // call the method from the class
    return $brand_instance->select_one_brand($brand_id);


}
function delete_brand_controller($brand_id){
    // create an instance of the brand class
    $brand_instance = new Brand();
    // call the method from the class
    return $brand_instance->delete_brand($brand_id);


}





//Category

function add_category_controller($category){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->add_category($category);

}

function select_category_details_controller($category){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->select_category_details($category);
}

function select_all_categories_controller(){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->select_all_categories();
    }
function update_category_controller($cat_id, $cat_name){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->update_one_category($cat_id, $cat_name);
    }
 function select_one_category_controller($cat_id){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->select_one_category($cat_id);


}
function delete_category_controller($cat_id){
    // create an instance of the category class
    $brand_instance = new Category();
    // call the method from the class
    return $brand_instance->delete_category($cat_id);


}

//select category for menu view



//Product
function add_product_controller($category,$brand,$title,$price,$desc,$image,$keywords){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_product($category,$brand,$title,$price,$desc,$image,$keywords);

}


function delete_product_controller($id){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->delete_one_product($id);

}

//
function get_last_product_controller(){
    //create instance of the cart class
    $product_instance = new Product();
    //calls method from cart class
    return $product_instance->get_last_product();
}

//adding an image controller
function add_image_controller($pid,$image_path){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_image($pid,$image_path);

}
//selecting images attached to a product
function select_images_controller($pid){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_images($pid);

}

function delete_image_controller($image_id){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->delete_one_image($image_id);

}

function update_product_controller($title,$product_id,$category,$brand,$price,$desc,$keywords){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_product($title,$product_id,$category,$brand,$price,$desc,$keywords);

}

function select_all_products_controller(){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_products();

}

function select_product_by_keyword_controller($keyword){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_product_by_keyword($keyword);

}

function select_product_by_title_controller($title){
    // create an instance of the product class
    $product_instance = new Product();

    // call the method from the class
    return $product_instance->select_product_by_title($title);

}

function select_product_by_brand_controller($brand){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_product_by_brand($brand);

}

function select_product_by_desc_controller($desc){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_product_by_desc($desc);

}


function select_product_category_controller($category){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_product_category($category);

}

function select_product_brand_controller($brand){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_product_brand($brand);

}

function select_one_product_controller($product_id){
    // create an instance of the category class
    $category_instance = new Product();
    // call the method from the class
    return $category_instance->select_one_product($product_id);


}

function select_category_controller($category){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->select_category($category);

}





?>