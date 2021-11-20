<?php

require('../Settings/connection.php');


class Cart extends Connection{

//adds to cart when not logged in
	function add_to_cart($p_id,$qty,$ip_add){
		// return true or false
		return $this->query("insert into cart(p_id, qty,ip_add) values('$p_id','$qty','$ip_add')");
	}

//Adds to cart when logged in
function quick_add($p_id,$ip_add,$cid,$qty){
    // return true or false
    return $this->query("insert into cart(p_id,ip_add,c_id,qty) values('$p_id','$ip_add','$cid','$qty')");
}

//updates customer id when customer logs in
function update_ID($CID,$ip_add ){
	// return true or false
	return $this->query("update cart  set c_id='$CID' where ip_add = '$ip_add'");
}	

//shows cart when not logged in
	function select_cart_by_ip($ip_add){
		return $this->fetch("select * from cart inner join products on cart.p_id = products.product_id where ip_add= '$ip_add'");

	}

//shows cart when logged in
	function select_cart_by_cid($CID){
		return $this->fetch("select * from cart inner join products on cart.p_id = products.product_id where c_id= '$CID'");

	}


//checks if products are in cart
	function select_product_incart($p_id){
		// return associative array or false
		return $this->fetchOne("select * from cart where p_id='$p_id' ");
	}
//updatiing the quantity
	function update_quantity($PID, $quantity){
		// return true or false
		return $this->query("update cart  set qty='$quantity' where p_id = '$PID'");
	}	
//deleting product from cart
	function delete_product_fromcart($id){
		// return true or false
		return $this->query("delete from cart where p_id = '$id'");
	}


//ORDERS
//inserts into order table
	
    function add_order($customer_id, $invoice_no, $order_date, $order_status){
        return $this->query("insert into orders (customer_id, invoice_no, order_date, order_status) values('$customer_id','$invoice_no', '$order_date', '$order_status')");
    }

	function add_order_details($order_id, $product_id, $qty){
        return $this->query("insert into orderdetails (order_id,product_id,	qty) values('$order_id','$product_id', '$qty')");
    }
        
    function get_last_order(){
        return $this ->fetchOne("select max(order_id) as currentOrder from orders");
    }

     //inserts payment
     function payment_cart($amount,$customer_id,$order_id,$currency,$payment_date){
        return $this->query("insert into payment (amt,customer_id,order_id,currency,payment_date) values ('$amount','$customer_id','$order_id','$currency','$payment_date')");
    }

    //Clear cart
    function clear_cart($CID){
        return $this->query("delete from cart where c_id ='$CID'");
    }

	function select_order($order_id){
        return $this->fetch("select customer.customer_name, orders.order_id, orders.invoice_no, orders.order_date, orders.order_status from orders join customer on (customer.customer_id = orders.customer_id) where orders.customer_id = '$order_id'");
    }

    function select_orderDetails($order_id){
        return $this->fetch("select products.product_name, products.product_price, orders.order_id, orders.invoice_no, orders.order_date, orders.order_status, orderdetails.qty, orderdetails.qty * products.product_price as result from orderdetails join products on (orderdetails.product_id = products.product_id) join orders on (orderdetails.order_id = orders.order_id) where orderdetails.order_id = '$order_id'");
    }

	
	//order owner details 
	function select_user($CID,$order_id){
		return $this->fetchOne("select * from orders join customers on orders.customer_id = customers.customer_id where orders.customer_id= '$CID' AND orders.order_id ='$order_id'");

	}

	//order owner details 
	function select_payment($order_id){
		return $this->fetchOne("select * from payment where order_id ='$order_id'");

	}



}



?>