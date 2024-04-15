<?php
include('config.php');
$customer_name = $_POST['customer_name'];
$mobile_no = $_POST['mobile_no'];
$country = $_POST['country'];
$email = $_POST['email'];
$password = $_POST['password'];
//here query check weather if user already registered so can't register again.  
$check_email_query = "SELECT * FROM login_details WHERE email='$email'";
$run_query = mysqli_query($conn, $check_email_query);

if (mysqli_num_rows($run_query) > 0) {
    header("location:customer_registration.php?wrong");
    //echo "<script>alert('Email $email is already exist, Please try another one!')</script>";  
    exit();
}
$qry = "INSERT INTO login_details(customer_name, mobile_no, country, email, password)
        VALUES('" . $customer_name . "', '" . $mobile_no . "', '" . $country . "', '" . $email . "', '" . $password . "')";
$result = mysqli_query($conn, $qry);
if ($result) {
    header("location:customer_registration.php?success");
} else {
    echo "Something Went Wrong";
}
mysqli_close($conn);
