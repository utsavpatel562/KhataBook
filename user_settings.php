<head>
    <title>KhataBook | User Settings</title>
</head>
<?php
include('config.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}
include('header.php');
?>
<?php
$newqry5 = "SELECT * FROM login_details WHERE email='" . $_SESSION['user'] . "'";
$query5 = mysqli_query($conn, $newqry5);
while ($row5 = mysqli_fetch_array($query5)) { ?>
    <div class="col-md-6" style="margin: auto;">
        <form class="card" action="user_settings_process.php" method="POST">
            <div class="card-header">
                <h3 class="card-title">Edit / Delete Account</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Your Name</label>
                    <div class="col">
                        <input type="text" name="customer_name" class="form-control" autocomplete="off" required value="<?php echo $row5['customer_name']; ?>">
                    </div>
                </div>
                <div class="row">
                    <label class="col-3 col-form-label pt-0">Your Mobile No.</label>
                    <div class="col">
                        <input type="number" name="mobile_no" class="form-control" autocomplete="off" required value="<?php echo $row5['mobile_no']; ?>">
                    </div>
                </div><br>
                <div class="row">
                    <label class="col-3 col-form-label pt-0 required">Country</label>
                    <div class="col">
                        <select class="form-control form-select" value="<?php echo $row5['country']; ?>" name="country">
                            <option value="India">India</option>
                            <option value="Canada">Canada</option>
                            <option value="USA">USA</option>
                            <option value="Australia">Australia</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="China">China</option>
                            <option value="Russia">Russia</option>
                        </select>
                    </div>
                </div><br>
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Your Email</label>
                    <div class="col">
                        <input type="email" readonly name="email" autocomplete="off" style="background-color:aliceblue; cursor:not-allowed;" value="<?php echo $row5['email']; ?>" required class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Your Password</label>
                    <div class="col">
                        <input type="text" name="password" autocomplete="off" value="<?php echo $row5['password'];
                                                                                    } ?>" required class="form-control">
                    </div>
                </div>
                <div class="card-footer text-end">
                    <input type="submit" style="width: 100%;" value="Update Record" class="btn btn-success">
                </div>
        </form>
    </div>
    <?php
    $newqry6 = "SELECT * FROM login_details WHERE email='" . $_SESSION['user'] . "'";
    $query6 = mysqli_query($conn, $newqry6);
    while ($row6 = mysqli_fetch_array($query6)) { ?>
        <div class="col-12" style="margin-bottom:20px;">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Delete My Account</h3>
                </div>
                <div class="card-body">
                    <div class="row row-cards">
                        <div class="card-footer text-end" style="margin-top:10px;">
                            <a href="user_settings_delete_process.php?id=<?php echo $row6['id'];
                                                                        } ?>"><input type="submit" style="width: 100%;" value="Delete Account" class="btn btn-danger">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>