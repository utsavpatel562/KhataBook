<?php
include('config.php');
session_start();
$email = $_SESSION['user'];
$customer_name = $_POST['customer_name'];
$mobile_no = $_POST['mobile_no'];
$country = $_POST['country'];
$password = $_POST['password'];
$upd = "UPDATE login_details SET customer_name='" . $customer_name . "', mobile_no='" . $mobile_no . "', 
country='" . $country . "', password='" . $password . "' WHERE email='" . $email . "'";
if (mysqli_query($conn, $upd)) {
    header("location:userprofile.php");
} else {
    header("location:userprofile.php");
}
mysqli_close($conn);
