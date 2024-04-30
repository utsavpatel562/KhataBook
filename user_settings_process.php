<?php
// Include the configuration file to connect to the database
include('config.php');

// Start a session to get the currently logged-in user's details
session_start();

// Retrieve the current user's email from the session
$email = $_SESSION['user'];

// Get the updated information from the POST request
$customer_name = $_POST['customer_name']; // The updated customer name
$mobile_no = $_POST['mobile_no']; // The updated mobile number
$country = $_POST['country']; // The updated country
$password = $_POST['password']; // The updated password (consider hashing for security)

// Create an SQL query to update the 'login_details' table with the new values
$upd = "UPDATE login_details SET 
    customer_name='" . $customer_name . "', 
    mobile_no='" . $mobile_no . "', 
    country='" . $country . "', 
    password='" . $password . "' 
WHERE email='" . $email . "'";

// Execute the update query
if (mysqli_query($conn, $upd)) {
    // If the update is successful, redirect to 'userprofile.php'
    header("location:userprofile.php");
} else {
    // If the update fails, redirect to 'userprofile.php' (potentially to display an error message)
    header("location:userprofile.php");
}

// Close the database connection
mysqli_close($conn);
?>
