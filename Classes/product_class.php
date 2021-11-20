<?php

require('../Settings/connection.php');

// inherit the methods from Connection
class Product extends Connection{

	function add_product($title,$category,$brand,$price,$desc,$colour,$keywords){
		// return true or false
		return $this->query("insert into products(product_name,product_cat,product_brand,product_price,product_desc,product_colour,product_keywords) values('$title','$category','$brand','$price','$desc','$colour','$keywords')");
	}	
	//getting last product added
	function get_last_product(){
        return $this ->fetchOne("select max(product_id) as currentProduct from products");
    }


	//insert an image 
	function add_image($pid,$image){
		// return true or false
		return $this->query("insert into image(product_id,image_path) values('$pid','$image')");
	}	

	// deleting an image
	function delete_one_image($image_id){
	// return true or false
		return $this->query("delete from image where image_id = '$image_id'");
	}

	// deleting an image
	function select_images($product_id){
		// return true or false
			return $this->fetch("select * from image where product_id = '$product_id'");
		}

	//deleting one product
	function delete_one_product($id){
		// return true or false
		return $this->query("delete from products where product_id = '$id'");
	}
	
	function update_one_product($title,$product_id, $category,$brand,$price,$desc,$keywords){
		// return true or false
		return $this->query("update products set product_cat='$category', product_brand='$brand',product_name='$title',product_price='$price',product_desc='$desc', product_keywords='$keywords' where product_id = '$product_id'");
	}

	function select_all_products(){
		// return array or false
		return $this->fetch("select * from products inner join brand on brand.brand_id = products.product_brand inner join categories on categories.cat_id=products.product_cat");
	}

	function select_one_product($id){
		// return associative array or false
		return $this->fetchOne("select * from products inner join brand on brand.brand_id = products.product_brand inner join categories on categories.cat_id=products.product_cat where product_id='$id'");
	}

	function select_product_by_keyword($keyword){
		// return associative array or false
		return $this->fetch("select * from products inner join brand on brand.brand_id = products.product_brand inner join categories on categories.cat_id=products.product_cat where product_keywords like '%$keyword%' or product_desc like'%$keyword%' or product_title like '%$keyword%' or brand_name like '%$keyword%' or cat_name like '%$keyword%' ");
	}

	function select_product_by_desc($desc){
		// return associative array or false
		return $this->fetch("select * from products where product_desc like'%$desc%'");
	}

	
	function select_product_by_title($title){
		// return associative array or false
		return $this->fetch("select * from products where product_title like '%$title%'");
	}

	//searches by brand
	function select_product_by_brand($title){
		// return associative array or false
		return $this->fetch("select * from products where product_brand  ='$title'");
	}

	function select_product_category($category){
		// return associative array or false
		return $this->fetch("select * from products where product_cat='$category'");
	}

	//selecting categories for menu
	

	function select_product_brand($brand){
		// return associative array or false
		return $this->fetch("select * from products where product_brand='$brand'");
	}

	

	

}

class Brand extends Connection{


	function add_brand($brand){
		// return true or false
		return $this->query("insert into brand(brand_name) values('$brand')");
	}

	function select_brand_details($brand){
		// return associative array or false
		return $this->fetchOne("select * from brand where brand_name='$brand'");
	}
	function select_all_brands(){
		// return array or false
		return $this->fetch("select * from brand");
	}
	function update_one_brand($brand_id,$brand_name){
		// return true or false
		return $this->query("update brand  set brand_id='$brand_id', brand_name='$brand_name' where brand_id = '$brand_id'");
	}
	function select_one_brand($brand_id){
		// return associative array or false
		return $this->fetchOne("select * from brand where brand_id='$brand_id' ");
	}
	//deleting brand
	function delete_brand($brand_id){
		// return true or false
		return $this->query("delete from brand where brand_id = '$brand_id'");
	}
}

class Category extends Connection{


	function add_category($category){
		// return true or false
		return $this->query("insert into categories (cat_name) values('$category')");
	}

	function select_category_details($category){
		// return associative array or false
		return $this->fetchOne("select * from categories where cat_name='$category'");
	}
	function select_all_categories(){
		// return array or false
		return $this->fetch("select * from categories");
	}
	function update_one_category($cat_id,$cat_name){
		// return true or false
		return $this->query("update categories  set cat_id='$cat_id', cat_name='$cat_name' where cat_id = '$cat_id'");
	}
	function select_one_category($cat_id){
		// return associative array or false
		return $this->fetchOne("select * from categories where cat_id='$cat_id' ");
	}

	function select_category($category){
		// return associative array or false
		return $this->fetch("select * from categories inner join products on  products.product_cat = categories.cat_id where cat_name = '$category'");
	}
	//deleting category
	function delete_category($cat_id){
		// return true or false
		return $this->query("delete from categories where cat_id = '$cat_id'");
	}
}



?>