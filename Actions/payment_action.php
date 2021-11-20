<?php
session_start();

require('../Controllers/cart_controller.php');



// initialize a client url which we will use to send the reference to the paystack server for verification
$curl = curl_init();

// set options for the curl session insluding the url, headers, timeout, etc
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_test_dcdbd20f7a7569866d6f67659fbf2e9286fb616c",
    "Cache-Control: no-cache",
),
));

// get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

// convert the response to PHP object
$decodedResponse = json_decode($response);

// check if the object has a status property and if its equal to 'success' ie. if verification was successful
if(isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success'){
    // get form values
    $email = $_GET['email'];
    $amt = $_GET['amount'];
    $ref= $_GET['reference'];
    $date= date("Y-m-d");
    $custID=$_SESSION["ID"];
    $invoice_no = floor(mt_rand(100, 1000));
    $status = 'pending';
    //inserts the order into the order table
    $add_order = add_order_controller($custID,$invoice_no,$date,$status);
    //call controller function to insert into database
    if($add_order){
        //get current item from orders
        $recent_order = get_last_order_controller();
        $cart = select_cart_by_CID_controller($custID);
        foreach($cart as $x){
            $add_OrderDetails = add_order_details_controller($recent_order['currentOrder'],$x['p_id'],$x['qty']);
        }

       
        $currency = "GHC";
        $add_Payment = payment_cart_controller($amt,$custID,$recent_order['currentOrder'],$currency,$date);

        if($add_Payment){
            $clearCart = clear_cart_controller($custID);
            if($clearCart){
                header("Location: ../View/order_placed.php?order_id=".$recent_order['currentOrder']);
            } else{
                header("Location: ../View/checkout.php?error=2");

            }
        } else{
            header("Location: ../View/checkout.php?error=3");
        }
    } else{
        header("Location: ../View/checkout.php?error=0");
    }


} else{
    header("Location: ../View/checkout.php?error=1");;
}

?>