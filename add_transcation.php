<head>
    <title>KhataBook | Add Customer</title>
</head>
<?php
include('config.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}
include('header.php');
?>
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Cust. Transcations
                    </div>
                    <h2 class="page-title">
                        Add Customer
                    </h2>
                </div>
            </div><br>
            <?php if (isset($_REQUEST['wrong'])) {
                echo "<div class='btn btn-danger' style='cursor:none; color:#fff;'>User / Payee already added!!! Please new transcation from dashboard</div><br><br>";
            } ?>
            <?php if (isset($_REQUEST['success2'])) {
                echo "<div class='btn btn-success' style='cursor:none; color:#fff;'>User / Payee Added!!! Check your dashboard</div><br><br>";
            } ?>
            <div class="col-lg-8">
                <div class="row row-cards">
                    <div class="col-12">
                        <form class="card" action="customer_transcation_process.php" method="POST">
                            <div class="card-body">
                                <div class="row row-cards">
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label class="form-label">Transcation ID:</label>
                                            <?php
                                            $n = 15;
                                            function getName($n)
                                            {
                                                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                                $randomString = '';

                                                for ($i = 0; $i < $n; $i++) {
                                                    $index = rand(0, strlen($characters) - 1);
                                                    $randomString .= $characters[$index];
                                                }

                                                return $randomString;
                                            }
                                            ?>
                                            <input type="varchar" class="form-control" disabled="" name="transcation_id" placeholder="transcation.id" value="<?php echo getName($n); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">KhataBook User</label>
                                            <select class="form-control form-select" name="khatabook_user">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Transcation Type</label>
                                            <select class="form-control form-select" name="transcation_type">
                                                <option value="recieved">Recieved</option>
                                                <option value="give">Give</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-5">
                                        <div class="mb-3">
                                            <label class="form-label">User / Payee Name</label>
                                            <input type="text" class="form-control" autocomplete="off" required placeholder="Enter name" name="user_payee_name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">User / Payee Email ID</label>
                                            <input type="email" class="form-control" autocomplete="off" required placeholder="Enter user / payee email" name="user_payee_email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <div class="mb-3">
                                            <label class="form-label">Date</label>
                                            <input type="date" class="form-control" placeholder="date" name="transcation_date">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Amount (Enter value if you get money)</label>
                                            <input type="number" name="amount" autocomplete="off" class="form-control" placeholder="Enter Amount">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-11">
                                        <div class="mb-3">
                                            <label class="form-label">Add Remarks (for reference)</label>
                                            <input type="text" name="remarks" autocomplete="off" class="form-control" placeholder="For reference">
                                        </div>
                                    </div>
                                    <center><input type="submit" class="btn btn-warning" value="Add +" style="width:150px;"></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>