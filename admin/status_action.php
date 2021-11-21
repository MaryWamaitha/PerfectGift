 <?php
session_start();
require('admin_controller.php');

// updating
if(isset($_POST['editstatus'])){

    // retrieve the order status and ID  from the form submission
    $order_status = $_POST['orderstatus'];
    $order_id=$_POST['orderID'];
    $customer_id=$_POST['customerID'];
    $invoice_no=$_POST['invoice'];
    $order_date=$_POST['date'];

    // call the function
    $result = update_orderstatus_controller($order_id, $customer_id, $invoice_no, $order_date, $order_status);

    if($result === true) header("Location: ../admin/dashboard/index.php");
    else echo "Update Failed";


}







?>