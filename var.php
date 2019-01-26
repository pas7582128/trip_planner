<?php 
if (strcmp ($res, "VERIFIED") == 0) {
	// assign posted variables to local variables
	$item_name = $_POST['item_name'];
	$item_number = $_POST['item_number'];
	$payment_status = $_POST['payment_status'];
	$payment_amount = $_POST['mc_gross'];
	$payment_currency = $_POST['mc_currency'];
	$txn_id = $_POST['txn_id'];
	$receiver_email = $_POST['receiver_email'];
	$payer_email = $_POST['payer_email'];
	
	include("dbcontroller.php");
	$db = new DBController();
	
	// check whether the payment_status is Completed
	$isPaymentCompleted = false;
	if($payment_status == "Completed") {
		$isPaymentCompleted = true;
	}
	// check that txn_id has not been previously processed
	$isUniqueTxnId = false; 
	$result = $db->selectQuery("SELECT * FROM payments WHERE txn_id = '$txn_id'");
	if(empty($result)) {
        $isUniqueTxnId = true;
	}	
	// check that receiver_email is your PayPal email
	// check that payment_amount/payment_currency are correct
	if($isPaymentCompleted && $isUniqueTxnId && $payment_amount == "0.01" && $payment_currency == "USD") {
		$payment_id = $db->insertQuery("INSERT INTO payment(item_number, item_name, payment_status, payment_amount, payment_currency, txn_id) VALUES('$item_number', '$item_name', $payment_status, '$payment_amount', '$payment_currency', '$txn_id')");
	}
	// process payment and mark item as paid.
	
	
	if(DEBUG == true) {
		error_log(date('[Y-m-d H:i e] '). "Verified IPN: $req ". PHP_EOL, 3, LOG_FILE);
	}
	
}
?>