<?php

require('connection.php');

// inherit the methods from Connection
class Admin extends Connection{


	
	function select_all_orders(){
		// return array or false
		return $this->fetch("select * from orders");
	}
	function select_count_orders(){
		// return array or false
		return $this->fetchOne("select count(order_id) as number from orders");
	}
	function select_count_customers(){
		// return array or false
		return $this->fetchOne("select count(customer_id) as numbers from customers");
	}
	function select_count_sales(){
		// return array or false
		return $this->fetchOne("select sum(amt) as sales from payment");
	}
	function select_count_products(){
		// return array or false
		return $this->fetchOne("select count(StockID) as stocks from stocks");
	}

	//updating
	function select_one_order($order_id){
		// return associative array or false
		return $this->fetchOne("select * from orders where order_id='$order_id'");
	}

	function update_product_status($order_id, $customer_id, $invoice_no, $order_date, $order_status){
		// return true or false
		return $this->query("update orders set order_status='$order_status' where order_id = '$order_id'");
	}
	
	}
	
	
?>