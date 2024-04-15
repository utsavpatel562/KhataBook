<?php
include('config.php');
$user_payee_email = $_REQUEST['user_payee_email'];
$query = "DELETE FROM customer_transcation WHERE user_payee_email='" . $_REQUEST['user_payee_email'] . "'";
$result = mysqli_query($conn, $query);
if ($result) {
    header("location:userprofile.php");
} else {
    echo "Error Generated";
}
mysqli_close($conn);
