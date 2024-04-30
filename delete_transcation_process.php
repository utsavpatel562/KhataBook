<?php
// Include the configuration file to connect to the database
include('config.php');

// Retrieve the 'user_payee_email' parameter from the request
$user_payee_email = $_REQUEST['user_payee_email'];

// Create an SQL query to delete records from 'customer_transcation' where the 'user_payee_email' matches the specified parameter
$query = "DELETE FROM customer_transcation WHERE user_payee_email='" . $user_payee_email . "'";

// Execute the SQL query
$result = mysqli_query($conn, $query);

// Check if the query execution was successful
if ($result) {
    // If successful, redirect to the 'userprofile.php' page
    header("location:userprofile.php");
} else {
    // If the query execution failed, display an error message
    echo "Error Generated";
}

// Close the database connection
mysqli_close($conn);
?>
