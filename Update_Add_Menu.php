<?php
session_start();

if (!isset($_SESSION["islogin"])) {
    echo "<script>window.location='index.php';</script>";
    exit;
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
                            <span>Edit Menu</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Menu</a></li>
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
                                    if (isset($_POST["Ssbtn"])) {
                                        if (empty($_FILES["imgF"]["name"])) {
                                            $fnewname = $_POST["oldimage1"];
                                        } else {

                                            // Image Upload
                                            $ext = pathinfo($_FILES["imgF"]["name"], PATHINFO_EXTENSION); //jpg
                                            $fnewname = time() . rand(1111, 9999) . "." . $ext; //562145613411245.jpg
                                            move_uploaded_file($_FILES["imgF"]["tmp_name"], "uploads/menu/" . $fnewname);
                                            // Image Upload
                                        }


                                        if (empty($_FILES["imgS"]["name"])) {
                                            $snewname = $_POST["oldimage2"];
                                        } else {

                                            // Image Upload
                                            $ext = pathinfo($_FILES["imgS"]["name"], PATHINFO_EXTENSION); //jpg
                                            $snewname = time() . rand(1111, 9999) . "." . $ext; //562145613411245.jpg
                                            move_uploaded_file($_FILES["imgS"]["tmp_name"], "uploads/menu/" . $snewname);
                                            // Image Upload

                                        }


                                        if (empty($_FILES["imgT"]["name"])) {
                                            $tnewname = $_POST["oldimage3"];
                                        } else {

                                            // Image Upload
                                            $ext = pathinfo($_FILES["imgT"]["name"], PATHINFO_EXTENSION); //jpg
                                            $tnewname = time() . rand(1111, 9999) . "." . $ext; //562145613411245.jpg
                                            move_uploaded_file($_FILES["imgT"]["tmp_name"], "uploads/menu/" . $tnewname);
                                            // Image Upload

                                        }

                                        $description = mysqli_real_escape_string($conn, $_POST["txtDes1"]);
                                        $spec = mysqli_real_escape_string($conn, $_POST["txtSpe"]);
                                        $result = mysqli_query($conn, "UPDATE tbl_menu 
                                        SET 
                                            Title='" . $_POST["txttitle"] . "',
                                            Description='" . $description . "',
                                            Img1='" . $fnewname . "',
                                            Img2='" . $snewname . "',
                                            Img3='" . $tnewname . "',
                                            Price='" . $_POST["txtPrc"] . "',
                                            Specification='" . $spec . "',
                                            Active='" . $_POST["optradio"] . "',
                                            A_time='" . $_POST["opttime"] . "',
                                            Weight='" . $_POST["txtWght"] . "',
                                            Subcat_id = '" . $_POST["txtsubcatid"] . "'
                                        WHERE Menu_id='" . $_GET["id"] . "'
                                    ") or die(mysqli_error($conn));


                                        if ($result) {
                                            echo "<script>window.location='Menu1.php';</script>";
                                            exit;
                                        } else {
                                    ?>
                                            <div class="alert alert-danger alert-dismissible fade show">
                                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                                </svg>
                                                <strong>Error!</strong> Data not inserted!
                                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                </button>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>




                                    <?php
                                    $id = $_GET["id"];
                                    $resultupdate = mysqli_query($conn, "select s.*,c.subcat_name from tbl_menu as s left join tbl_subcategory as c on c.subcat_id=s.subcat_id where s.Menu_id='" . $_GET["id"] . "'") or die(mysqli_error($conn));
                                    $count = 1;
                                    while ($rowupdate = mysqli_fetch_assoc($resultupdate)) {
                                    ?>



                                        <form method="post" enctype="multipart/form-data" id="menu-form" action="">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Sub Category Name</label>
                                                <div class="col-sm-9">
                                                    <select class="mr-sm-2 form-control" id="txtsubcatid" name="txtsubcatid">
                                                        <?php
                                                        $result = mysqli_query($conn, "select * from tbl_subcategory") or die(mysqli_error($conn));
                                                        $count = 1;
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>

                                                            <option value="<?php echo $row["subcat_id"]; ?>" <?php if ($row["subcat_id"] == $rowupdate["Subcat_id"]) echo "selected"; ?>>
                                                                <?php echo $row["subcat_name"]; ?>
                                                            </option>

                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Title</label>
                                                <div class="col-sm-9">
                                                    <input value="<?php echo $rowupdate["Title"]; ?>" name="txttitle" type="text" class="form-control" placeholder="Title">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <input value="<?php echo $rowupdate["Description"]; ?>" name="txtDes1" type="text" class="form-control" placeholder="Description">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Item Image</label>
                                                <div class="col-sm-9">
                                                    <input name="imgF" type="file" class="form-control" placeholder="Password">
                                                    <a href="uploads/menu/<?php echo $rowupdate["Img1"]; ?>" target="_blank"><img src="uploads/menu/<?php echo $rowupdate["Img1"]; ?>" width="100" height="100" /></a>
                                                    <input type="hidden" name="oldimage1" value="<?php echo $rowupdate["Img1"]; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Item Image</label>
                                                <div class="col-sm-9">
                                                    <input name="imgS" type="file" class="form-control" placeholder="Password">
                                                    <a href="uploads/menu/<?php echo $rowupdate["Img2"]; ?>" target="_blank"><img src="uploads/menu/<?php echo $rowupdate["Img2"]; ?>" width="100" height="100" /></a>
                                                    <input type="hidden" name="oldimage2" value="<?php echo $rowupdate["Img2"]; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Item Image</label>
                                                <div class="col-sm-9">
                                                    <input name="imgT" type="file" class="form-control" placeholder="Password">
                                                    <a href="uploads/menu/<?php echo $rowupdate["Img3"]; ?>" target="_blank"><img src="uploads/menu/<?php echo $rowupdate["Img3"]; ?>" width="100" height="100" /></a>
                                                    <input type="hidden" name="oldimage3" value="<?php echo $rowupdate["Img3"]; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Price</label>
                                                <div class="col-sm-9">
                                                    <input value="<?php echo $rowupdate["Price"]; ?>" name="txtPrc" type="text" class="form-control" placeholder="Amount">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Specification</label>
                                                <div class="col-sm-9">
                                                    <input value="<?php echo $rowupdate["Specification"]; ?>" name="txtSpe" type="text" class="form-control" placeholder="Info">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Active</label>

                                                <div class="col-sm-9">

                                                    <div class="form-control">
                                                        <label class="radio-inline mr-3"><input type="radio" value="yes" name="optradio" <?php echo ($rowupdate["Active"] == "yes") ? "checked" : ""; ?>> Yes</label>
                                                        <label class="radio-inline mr-3"><input type="radio" value="no" name="optradio" <?php echo ($rowupdate["Active"] == "no") ? "checked" : ""; ?>> No</label>
                                                    </div>

                                                    <label id="optradio-error" class="error" for="optradio" style="display:none;"></label>

                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Time</label>
                                                <div class="col-sm-9">
                                                    <select class="mr-sm-2 form-control" id="inlineFormCustomSelect" name="opttime">
                                                        <option value="" selected>Choose...</option>
                                                        <option value="1" <?php echo ($rowupdate["A_time"] == "1") ? "selected" : ""; ?>>Always</option>
                                                        <option value="2" <?php echo ($rowupdate["A_time"] == "2") ? "selected" : ""; ?>>Morning</option>
                                                        <option value="3" <?php echo ($rowupdate["A_time"] == "3") ? "selected" : ""; ?>>Afternoon</option>
                                                        <option value="4" <?php echo ($rowupdate["A_time"] == "4") ? "selected" : ""; ?>>Evening</option>

                                                    </select>
                                                    <label id="txtTime-error" class="error" for="inlineFormCustomSelect" style="display:none;"></label>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Weight</label>
                                                <div class="col-sm-9">
                                                    <input value="<?php echo $rowupdate["Weight"]; ?>" name="txtWght" type="text" class="form-control" placeholder="Weight">
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
                    $(document).ready(function() {


                        $('#menu-form').validate({
                            rules: {
                                txttitle: {
                                    required: true
                                },
                                txtDes1: {
                                    required: true
                                },
                                txtPrc: {
                                    required: true,
                                    number: true
                                },
                                txtSpe: {
                                    required: true,

                                },
                                txtWght: {
                                    required: true,
                                    number: true
                                },
                                optradio: {
                                    required: true
                                },
                                opttime: {
                                    required: true
                                }
                            },
                            messages: {
                                txttitle: {
                                    required: "Please Enter Menu Title"
                                },
                                txtDes1: {
                                    required: "Please Enter Menu Description"
                                },
                                txtPrc: {
                                    required: "Please Enter Menu Price",
                                    number: "Please Enter Only Numbers"
                                },
                                txtSpe: {
                                    required: "Please Enter Specification",
                                },
                                txtWght: {
                                    required: "Please Enter Weight",
                                },
                                optradio: {
                                    required: "Please Select Status",
                                },
                                opttime: {
                                    required: "Please Select Time",
                                },

                            }

                        });
                    });
                </script>


</body>


<!-- Mirrored from koki.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 08:04:37 GMT -->

</html>