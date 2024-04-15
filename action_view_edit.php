<?php
include('config.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}
include('header.php');
?>
<?php if (isset($_REQUEST['wrong'])) {
    echo "<center><div class='btn btn-danger' style='cursor:none; color:#fff;'>Oops!!! Record Not Updated</div></center>";
} ?>
<?php if (isset($_REQUEST['updated'])) {
    echo "<center><div class='btn btn-success' style='cursor:none; color:#fff;'>Record Updated Successfully!!!</div></center>";
} ?>
<?php
$newqry5 = "SELECT * FROM customer_transcation WHERE user_payee_email='" . $_REQUEST['user_payee_email'] . "'";
$query5 = mysqli_query($conn, $newqry5);
while ($row5 = mysqli_fetch_array($query5)) { ?>
    <div class="col-md-6" style="margin: auto;">
        <form class="card" action="update_transcation_process.php" method="POST">
            <div class="card-header">
                <h3 class="card-title">Edit / Delete Record</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">User / Payee Name</label>
                    <div class="col">
                        <input type="text" name="user_payee_name" class="form-control" autocomplete="off" required value="<?php echo $row5['user_payee_name']; ?>">
                    </div>
                </div>
                <div class="row">
                    <label class="col-3 col-form-label pt-0">KhataBook User?</label>
                    <div class="col">
                        <select class="form-control form-select" value="<?php echo $row5['khatabook_user']; ?>" name="khatabook_user">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div><br>
                <div class="row">
                    <label class="col-3 col-form-label pt-0 required">Transcation Type</label>
                    <div class="col">
                        <select class="form-control form-select" value="<?php echo $row5['transcation_type']; ?>" name="transcation_type">
                            <option value="recieved">Recieved</option>
                            <option value="give">Give</option>
                        </select>
                    </div>
                </div><br>
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">User / Payee Email</label>
                    <div class="col">
                        <input type="email" readonly name="user_payee_email" autocomplete="off" value="<?php echo $row5['user_payee_email']; ?>" required class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Transcation Date</label>
                    <div class="col">
                        <input type="date" name="transcation_date" autocomplete="off" value="<?php echo $row5['transcation_date']; ?>" required class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Amount ($):</label>
                    <div class="col">
                        <input type="number" name="amount" autocomplete="off" required class="form-control" value="<?php echo $row5['amount'];
                                                                                                                } ?>">
                    </div>
                </div>
                <div class="card-footer text-end">
                    <input type="submit" value="Update Record" class="btn btn-success">
                </div>
        </form>
    </div>