<?php
// Include the configuration file to connect to the database
include('config.php');

// Start a session to maintain user information
session_start();

// Retrieve the 'user_payee_email' parameter from the request
$user_payee_email = $_REQUEST['user_payee_email'];

// Retrieve other details from the POST request
$user_payee_name = $_POST['user_payee_name']; // The payee's name
$khatabook_user = $_POST['khatabook_user']; // The KhataBook username
$transcation_type = $_POST['transcation_type']; // Type of the transaction
$transcation_date = $_POST['transcation_date']; // Date of the transaction
$amount = $_POST['amount']; // Amount of the transaction

// Construct an SQL query to update a record in the 'customer_transcation' table
$upd = "UPDATE customer_transcation SET 
    user_payee_name='" . $user_payee_name . "', 
    khatabook_user='" . $khatabook_user . "', 
    transcation_type='" . $transcation_type . "', 
    transcation_date='$transcation_date', 
    amount='" . $amount . "' 
WHERE user_payee_email='" . $user_payee_email . "'";

// Execute the update query
if (mysqli_query($conn, $upd)) {
    // If the update is successful, redirect to the 'userprofile.php' page
    header("location:userprofile.php");
} else {
    // If the update fails, still redirect to the 'userprofile.php' page (perhaps with an error indicator)
    header("location:userprofile.php");
}

// Close the database connection
mysqli_close($conn);
?>
