<?php
include('config.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}
$email_from = $_SESSION['user'];
$khatabook_user = $_POST['khatabook_user'];
$transcation_type = $_POST['transcation_type'];
$user_payee_name = $_POST['user_payee_name'];
$user_payee_email = $_POST['user_payee_email'];
$transcation_date = $_POST['transcation_date'];
$amount = $_POST['amount'];
$remarks = $_POST['remarks'];
//here query check weather if user already registered so can't register again.  
$check_email_query = "SELECT * FROM customer_transcation WHERE user_payee_email='$user_payee_email'";
$run_query = mysqli_query($conn, $check_email_query);

if (mysqli_num_rows($run_query) > 0) {
    header("location:add_transcation.php?wrong");
    //echo "<script>alert('Email $email is already exist, Please try another one!')</script>";  
    exit();
}
$qry = "INSERT INTO customer_transcation(email_from, khatabook_user, transcation_type, user_payee_name, user_payee_email, transcation_date, amount, remarks)
        VALUES('" . $email_from . "', '" . $khatabook_user . "', '" . $transcation_type . "', '" . $user_payee_name . "', '" . $user_payee_email . "', '" . $transcation_date . "', '" . $amount . "', '" . $remarks . "')";
$result = mysqli_query($conn, $qry);
if ($result) {
    header("location:add_transcation.php?success2");
} else {
    echo "Something Went Wrong";
}
mysqli_close($conn);
