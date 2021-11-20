<?php

require('../Controllers/admin_controller.php');
// return array of all rows, or false (if it failed)
$purchases = select_all_orders_controller();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>ADMIN DASHBOARD</title>
</head>
<body>


	<h1>PURCHASES</h1>

	 <table class="table">
        <thead>
            <tr>
                <th>Purchase ID</th>
                <th>Product ID</th>
                <th>Quantity</th>
				<th></th>
				<th></th>
            </tr>
        </thead>

        <tbody>
			<?php
			foreach($purchases as $x){
				echo 
				"
				<tr>
					<td>{$x['purchase_id']}</td>
					<td>{$x['product_id']}</td>
					<td>{$x['quantity']}</td>
					
				</tr>
				";
			}

			?>

		
        </tbody>
    </table>
	
	
</body>
</html>