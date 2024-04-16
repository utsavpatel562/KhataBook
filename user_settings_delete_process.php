<?php
include('config.php');
$id = $_REQUEST['id'];
$query = "DELETE FROM login_details WHERE id='" . $id . "'";
$result = mysqli_query($conn, $query);
if ($result) {
    header("location:index.php?deleted");
} else {
    echo "Error Generated";
}
mysqli_close($conn);
