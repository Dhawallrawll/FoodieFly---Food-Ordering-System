<?php
session_start();

if(!isset($_SESSION["islogin"]))
{
    echo "<script>window.location='index.php';</script>";
}
?>

<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from koki.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 08:04:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Update Menu</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
        <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
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
       
        <!--**********************************
            Nav header end
        ***********************************-->
        
        <!--**********************************
            Chat box start
        ***********************************-->
        
        <!--**********************************
            Chat box End
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
                            <h4>Menu</h4>
                            <span>Add Menu</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Menu</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                   
                    
                    
                    <div class="col-xl-1 col-lg-12"></div>
                    <div class="col-xl-10 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Menu</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">



                                <?php
// Check if the form has been submitted
if(isset($_POST["Ssbtn"]))
{
    // Get the values from the form and update the order record in the database
    $result = mysqli_query($conn, "UPDATE tbl_order SET order_status = '".$_POST["status"]."' WHERE order_id = '".$_GET["id"]."'") or die(mysqli_error($conn));

    if($result == true)
    {
        ?>
        <div class="alert alert-success alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
        <strong>Success!</strong> Order_status updated.
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
        <?php
    }
    else
    {
        // Show an error message if the update failed
?>
        <div class="alert alert-danger alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
            <strong>Error!</strong> Data not inserted!
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span></button>
        </div>
<?php
    }
}

// Get the order details from the database
$id = $_GET["id"];
$resultupdate = mysqli_query($conn, "SELECT * FROM tbl_order WHERE order_id = '".$id."'") or die(mysqli_error($conn));

// Loop through the result and display the form with the order details
while($rowupdate = mysqli_fetch_assoc($resultupdate))
{
?>
    <form method="post" enctype="multipart/form-data" id="menu-form">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Sub Category Name</label>
            <div class="col-sm-9">
                <select class="mr-sm-2 form-control" id="txtsubcatid" name="txtsubcatid">
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM tbl_order") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_assoc($result))
                    {
                        // Use the $rowupdate variable to preselect the current subcategory in the dropdown
                        $selected = ($rowupdate["title"] == $row["title"]) ? "selected" : "";
                    ?>
                        <option value="<?php echo $row["order_id"]; ?>" <?php echo $selected; ?>><?php echo $row["title"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
                </div>

                      </div>
                     </div>

                     <div class="form-group row">
            <label class="col-sm-3 col-form-label">Order_status</label>
            <div class="col-sm-9">
                <input value="<?php echo $rowupdate["order_status"]; ?>" name="status" type="text" class="form-control" placeholder="status">
            </div>
        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button name="Ssbtn" type="submit" class="btn btn-primary float-right">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                     <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-12"></div>
                    
                    
                    
                    
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php include 'footer.php'; ?>
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
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script>
        $(document).ready(function(){


                $('#menu-form').validate({
                    rules:
                    {
                        txttitle:
                        {
                            required:true
                        },
                        txtDes1:
                        {
                            required:true
                        },
                        txtPrc:
                        {
                             required:true,
                             number:true
                        },
                        txtSpe:
                        {
                             required:true,
                             
                        },
                        txtWght:
                        {
                             required:true,
                             number:true
                        }
                    },
                    messages:
                    {
                        txttitle:
                        {
                            required:"Please Enter Menu Title"
                        },
                        txtDes1:
                        {
                            required:"Please Enter Menu Description"
                        },
                        txtPrc:
                        {
                             required:"Please Enter Menu Price",
                             number: "Please Enter Only Numbers"
                        },
                        txtSpe:
                        {
                             required:"Please Enter Specification",
                        },
                        txtWght:
                        {
                             required:"Please Enter Weight",
                        }
                    }

                });




        });
    </script>


</body>


<!-- Mirrored from koki.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 08:04:37 GMT -->
</html>