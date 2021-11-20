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
		return $this->fetchOne("select count(payment_id) as sales from payment");
	}
	function select_count_products(){
		// return array or false
		return $this->fetchOne("select count(StockID) as stocks from stocks");
	}

	
	}



?>