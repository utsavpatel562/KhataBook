<?php
include('config.php');
session_start();
$user_payee_email = $_REQUEST['user_payee_email'];
$user_payee_name = $_POST['user_payee_name'];
$khatabook_user = $_POST['khatabook_user'];
$transcation_type = $_POST['transcation_type'];
$transcation_date = $_POST['transcation_date'];
$amount = $_POST['amount'];
$upd = "UPDATE customer_transcation SET user_payee_name='" . $user_payee_name . "',khatabook_user='" . $khatabook_user . "', 
transcation_type='" . $transcation_type . "', transcation_date='$transcation_date', amount='" . $amount . "' WHERE user_payee_email='" . $_REQUEST['user_payee_email'] . "'";
if (mysqli_query($conn, $upd)) {
    header("location:userprofile.php");
} else {
    header("location:userprofile.php");
}
mysqli_close($conn);
