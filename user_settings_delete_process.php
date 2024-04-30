<?php
// Include the configuration file for database connection settings
include('config.php');

// Get the 'id' parameter from the request
$id = $_REQUEST['id'];

// Create a SQL query to delete the record from 'login_details' where the 'id' matches the given parameter
$query = "DELETE FROM login_details WHERE id='" . $id . "'";

// Execute the delete query
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // If successful, redirect to the index page with a 'deleted' parameter in the query string
    header("location:index.php?deleted");
} else {
    // If the query failed, display an error message
    echo "Error Generated";
}

// Close the database connection
mysqli_close($conn);
?>
