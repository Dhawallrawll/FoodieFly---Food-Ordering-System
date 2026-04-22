<?php
session_start();
include "connection.php";

if(!isset($_SESSION["islogin"]))
{
	echo "<script>window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from koki.dexignzone.com/xhtml/ecom-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 15:32:10 GMT -->

<!-- Mirrored from file:///C:/Users/nakra/Downloads/admin/koki.dexignzone.com/xhtml/ecom-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 15:37:39 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Koki :  Restaurant Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:title" content="Koki :  Restaurant Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:description" content="Koki :  Restaurant Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:image" content="social-image.png"/>
	<meta name="format-detection" content="telephone=no">
    <title>Koki -  Restaurant Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="images/logo.png" alt="">
                <img class="logo-compact" src="images/logo-text.png" alt="">
                <img class="brand-title" src="images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
        <!--**********************************
            Header start
        ***********************************-->
		<?php include 'header.php'; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include 'sidebar.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>invoice</h4>
                            <p class="mb-0">Your receipt here</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Bill</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Receipt</a></li>
                        </ol>
                    </div>
                </div>

				<?php
										$id = $_GET["id"];
										$sql = "SELECT f_name, l_name, address, email, phone_no, date_time
										FROM tbl_order
										WHERE order_id = '".$id."'";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                // loop through each row and display the data in the HTML table
                                                $count = 1;
                                            while($row=mysqli_fetch_assoc($result))
                                            {
                                            ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mt-3">
                            <div class="card-header"> Invoice <strong><?php echo $row["date_time"]?></strong> <span class="float-end">
                                    <strong>Status:</strong> Pending</span> </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="mt-4 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <h6>From:</h6>
                                        <div> <strong>FAFO Restaurant</strong> </div>
                                        <div>G-101 Meriton Plaza , Surat</div>
                                        <div>Email: info@FAFO.com</div>
                                        <div>Phone: +91 123 456 7890</div>
                                    </div>

									
                                    <div class="mt-4 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <h6>To:</h6>
                                        <div> <strong><?php echo $row["f_name"];?> <?php echo $row["l_name"];?></strong> </div>
                                        <div><?php echo $row["address"];?></div>
                                        <div>Email: <?php echo $row["email"];?></div>
                                        <div>Phone: +91 <?php echo $row["phone_no"];?></div>
                                    </div>
									<?php } ?> 
                                 <?php } ?>					

                                    <div class="mt-4 col-xl-6 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-lg-start justify-content-md-center justify-content-xs-start">
                                        <div class="row align-items-center">
											<div class="col-sm-9"> 
												<div class="brand-logo mb-3">
													<img class="logo-abbr me-2" width="50" src="images/logo-black.png" alt="">
												
												</div>
                                                <span>
                                                    <strong>Thank you for choose us!</strong></span><br>
                                                <small class="text-muted">Visit again</small>
                                            </div>
                                            <div class="col-sm-3 mt-3"> <img src="images/qr.png" alt="" class="img-fluid width110"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Item</th>
                                                <th>Order_notes</th>
                                                <th class="right">Unit Cost</th>
                                                <th class="center">Qty</th>
                                                <th class="right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										$id = $_GET["id"];
                                            $sql = "SELECT tbl_user.*, tbl_order.* 
											FROM tbl_user 
											INNER JOIN tbl_order 
											ON tbl_user.user_id=tbl_order.user_id 
											WHERE tbl_order.order_id = '".$id."'";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                // loop through each row and display the data in the HTML table
                                                $count = 1;
                                            while($row=mysqli_fetch_assoc($result))
                                            {
                                            ?>
                                            <tr>
                                                <td class="center"><?php echo $count;$count++; ?></td>
                                                <td class="left strong"><?php echo $row["title"]; ?></td>
                                                <td class="left"><?php echo $row["order_notes"]; ?></td>
                                                <td class="right">₹ <?php echo $row["price"]; ?></td>
                                                <td class="center"><?php echo $row["qty"]; ?></td>
                                                <td class="right">₹ <?php echo $row["total_price"]; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ms-auto">
                                        <table class="table table-clear">
										<?php
// Assuming the total bill amount is stored in $total_bill variable
$subtotal = $row["total_price"];
$gst_rate = 5; // GST rate in percentage
$gst = ($gst_rate / 100) * $subtotal;
$total = $subtotal + $gst;
?>

<tbody>
    <tr>
        <td class="left"><strong>Subtotal</strong></td>
        <td class="right">₹ <?php echo $subtotal; ?></td>
    </tr>
    <tr>
        <td class="left"><strong>GST (<?php echo $gst_rate; ?>%)</strong></td>
        <td class="right">₹ <?php echo $gst; ?></td>
    </tr>
    <tr>
        <td class="left"><strong>Total</strong></td>
        <td class="right"><strong>₹ <?php echo $total; ?></strong></td>
    </tr>


												<?php } ?> 
                                          <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>


</body>


<!-- Mirrored from koki.dexignzone.com/xhtml/ecom-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 15:32:11 GMT -->

<!-- Mirrored from file:///C:/Users/nakra/Downloads/admin/koki.dexignzone.com/xhtml/ecom-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 15:37:39 GMT -->
</html>