<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from koki.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 08:04:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login </title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        body {
            font-family: "Poppins", serif;
            font-weight: 400;
            font-style: normal;
            scroll-behavior: smooth;
        }

        .icon {
            position: relative;

            input {
                font-size: 15px;
                padding-left: 30px;
                font-family: "Poppins", serif;
                font-weight: 400;
                font-style: normal;
            }
        }

        .fa {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: black;
            opacity: 0.8;
        }

        .fa-regular {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: black;
        }
    </style>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>

                                    <?php
                                    if (isset($_POST["btnlogin"])) {
                                        $result = mysqli_query($conn, "select * from tbl_admin_login where A_username='" . $_POST["txtusername"] . "' and A_password='" . $_POST["txtpassword"] . "'") or die(mysqli_error($conn));

                                        if (mysqli_num_rows($result) <= 0) {
                                            echo "Not Found!";
                                        } else {
                                            $_SESSION["islogin"] = "true";
                                            echo "<script>window.location='Dashboard.php';</script>";
                                        }
                                    }
                                    ?>


                                    <form method="post">
                                        <div class="form-group d-flex flex-column">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <div class="icon">
                                                <i class="fa fa-user"></i>
                                                <input type="text" class="form-control" name="txtusername" required>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex flex-column">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <div class="icon">
                                                <i class="fa fa-lock"></i>
                                                <i class="fa-regular fa-eye" id="passwordEye" onclick="return togglePassword()"></i>
                                                <input type="password" class="form-control" name="txtpassword" id="txtPassword" required>
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1">
                                                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                                    <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="btnlogin" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("txtPassword")
            var passwordIcon = document.getElementById("passwordEye")
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordIcon.classList.remove("fa-eye");
                passwordIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                passwordIcon.classList.remove("fa-eye-slash");
                passwordIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>


<!-- Mirrored from koki.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 08:04:12 GMT -->

</html>