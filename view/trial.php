<?php
session_start();
$email=$_SESSION["email"];
echo $email;
?>
https://api.paystack.co/checkout/request_inline?id=paystack7OWgg&key=pk_test_5f8db00757a50340ea680b289aeb5beb88d52aff&email=marywamaitha019%40gmail.com&currency=GHS&metadata=%7B%22referrer%22%3A%22http%3A%2F%2Flocalhost%2Ftheperfectgift%2Fview%2Fcheckout.php%22%7D&mode=popup&hasTLSFallback=true&device=d762b74e05d7c81edeb991006e9a3208