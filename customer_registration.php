<!-- KhataBook by Utsav Patel-->
<?php
include('config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>KhataBook | Login</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet" />
    <link href="./dist/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
    <link href="./dist/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
    <link href="./dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
    <link href="./dist/css/demo.min.css?1684106062" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
            background-image: url("dist/bg1.jpg");
            background-size: cover;
        }
    </style>
</head>

<body>
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <center><img src="dist/logo1.png" style="width:200px; margin-top:10px; border-radius:5px; mix-blend-mode:hard-light;" alt="KhataBook Logo"></center>
                    <?php if (isset($_REQUEST['wrong'])) {
                        echo "<center><div class='btn btn-danger' style='cursor:none; color:#fff;'>Email ID Already Exist!!! Try Another One</div></center>";
                    } ?>
                    <?php if (isset($_REQUEST['success'])) {
                        echo "<center><div class='btn btn-success' style='cursor:none; color:#fff;'>You successfully registered!!! Please Login Now</div></center>";
                    } ?>
                    <div class="col-md-5" style="margin:10px auto;">
                        <form class="card" style="background: rgba(0,0,0,0.7);
  backdrop-filter: saturate(180%) blur(20px); color: #fff; border-radius: 10px;" action="register_process.php" method="POST">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label required">Customer Name</label>
                                    <div>
                                        <input type="text" required autocomplete="off" class="form-control" placeholder="Enter your name" name="customer_name" style="background: rgba(0,0,0,0.7);
  backdrop-filter: saturate(180%) blur(20px); color: #fff; border: 1px solid #fff;">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Customer Phone No.</label>
                                    <input type="text" name="mobile_no" class="form-control" maxlength="13" data-mask="(+1) 000-000-0000" data-mask-visible="true" placeholder="(+1) 000-000-0000" autocomplete="off" style="background: rgba(0,0,0,0.7);
  backdrop-filter: saturate(180%) blur(20px); color: #fff; border: 1px solid #fff;" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Select your country</label>
                                    <select type="text" class="form-select" id="select-countries" value="" name="country" style="background: rgba(0,0,0,0.7);
  backdrop-filter: saturate(180%) blur(20px); color: #fff; border: 1px solid #fff;">
                                        <option value="Canada" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-pl&quot;&gt;&lt;/span&gt;">Canada</option>
                                        <option value="USA" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-de&quot;&gt;&lt;/span&gt;">USA</option>
                                        <option value="India" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-cz&quot;&gt;&lt;/span&gt;">India</option>
                                        <option value="Australia" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-br&quot;&gt;&lt;/span&gt;">Australia</option>
                                        <option value="United Kingdom" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-br&quot;&gt;&lt;/span&gt;">United Kingdom</option>
                                        <option value="Germany" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-br&quot;&gt;&lt;/span&gt;">Germany</option>
                                        <option value="France" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-br&quot;&gt;&lt;/span&gt;">France</option>
                                        <option value="China" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-br&quot;&gt;&lt;/span&gt;">China</option>
                                        <option value="Russia" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-br&quot;&gt;&lt;/span&gt;">Russia</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Email address</label>
                                    <div>
                                        <input type="email" required autocomplete="off" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name="email" style="background: rgba(0,0,0,0.7);
  backdrop-filter: saturate(180%) blur(20px); color: #fff; border: 1px solid #fff;">
                                        <small class="form-hint">We'll never share your email with anyone else.</small>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Password</label>
                                    <div>
                                        <input type="password" required autocomplete="off" class="form-control" name="password" placeholder="Password" style="background: rgba(0,0,0,0.7);
  backdrop-filter: saturate(180%) blur(20px); color: #fff; border: 1px solid #fff;">
                                        <small class="form-hint">
                                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                                            spaces, special characters, or emoji.
                                        </small>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success" style="width:150px; float: right;">Register Now</button>
                        </form>
                        <a href="index.php" style="color:deepskyblue">Login Now</a>
                    </div>