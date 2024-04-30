<?php
// Include configuration for database connection
include('config.php');

// Start a session to check for a logged-in user
session_start();

// If there's no user in the session, redirect to the login page
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}

// Retrieve various data from the POST request
$email_from = $_SESSION['user']; // User's email from the session
$khatabook_user = $_POST['khatabook_user']; // The KhataBook username
$transcation_type = $_POST['transcation_type']; // Type of transaction
$user_payee_name = $_POST['user_payee_name']; // Name of the payee
$user_payee_email = $_POST['user_payee_email']; // Email of the payee
$transcation_date = $_POST['transcation_date']; // Transaction date
$amount = $_POST['amount']; // Transaction amount
$remarks = $_POST['remarks']; // Any additional remarks

// Check if the email of the payee already exists in the 'customer_transcation' table
$check_email_query = "SELECT * FROM customer_transcation WHERE user_payee_email='$user_payee_email'";
$run_query = mysqli_query($conn, $check_email_query);

// If there's already a record with the same email, redirect to the transaction page with an error parameter
if (mysqli_num_rows($run_query) > 0) {
    header("location:add_transcation.php?wrong");
    exit();
}

// Insert the new transaction into the 'customer_transcation' table
$qry = "INSERT INTO customer_transcation(email_from, khatabook_user, transcation_type, user_payee_name, user_payee_email, transcation_date, amount, remarks)
        VALUES('" . $email_from . "', '" . $khatabook_user . "', '" . $transcation_type . "', '" . $user_payee_name . "', '" . $user_payee_email . "', '" . $transcation_date . "', '" . $amount . "', '" . $remarks . "')";

// Execute the insert query
$result = mysqli_query($conn, $qry);

// If the insertion is successful, redirect to the transaction page with a success parameter
if ($result) {
    header("location:add_transcation.php?success2");
} else {
    // If the insertion fails, output an error message
    echo "Something Went Wrong";
}

// Close the database connection
mysqli_close($conn);
?>
