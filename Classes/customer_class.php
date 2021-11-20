<?php

require('../Settings/connection.php');

// inherit the methods from Connection
class Customer extends Connection{


	function add_customer($fname,$lname,$email,$password){
		// return true or false
		return $this->query("insert into customers(customer_Fname, customer_Lname, customer_email,customer_pass) values('$fname', '$lname' ,'$email','$password')");
	}

	function delete_one_customer($id){
		// return true or false
		return $this->query("delete from customer where customer_id = '$id'");
	}

	function update_one_customer($name, $email,$password, $country, $city,$contact){
		// return true or false
		return $this->query("update customer set customer_name='$name', customer_email='$email',customer_pass ='$password',customer_country='$country',customer_city='$city',  customer_contact='$contact' where customer_id = '$id'");
	}

	function select_all_customers(){
		// return array or false
		return $this->fetch("select * from customer");
	}

	function select_one_customer($id){
		// return associative array or false
		return $this->fetchOne("select * from customers where customer_id='$id'");
	}

	//Function for checking if email already exists 
	function select_customer_email($email){
		// return associative array or false
		return $this->fetchOne("select * from customers where customer_email='$email'");
	}

	//Function for checking if email already exists 
	function select_customer_details($email){
		// return associative array or false
		return $this->fetchOne("select * from customers where customer_email='$email'");
	}

}

?>