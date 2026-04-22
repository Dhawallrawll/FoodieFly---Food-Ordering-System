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
    <title>Admin Dashboard  Addcategory</title>
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
                            <h4>Manage Category</h4>
                            <span>Add Category</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Category</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Category</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                   
                    
                    
                    <div class="col-xl-1 col-lg-12"></div>
                    <div class="col-xl-10 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Category Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <?php
                                    if(isset($_POST["btnadd"]))
                                    {
                                        if(empty($_FILES["txtcatimg"]["name"]))
                                        {
                                            $newname=$_POST["oldimage"];
                                        }
                                        else
                                        {
                                             // Image Upload
                                            $ext = pathinfo($_FILES["txtcatimg"]["name"],PATHINFO_EXTENSION);//jpg
                                            $newname = time().rand(1111,9999).".".$ext;//562145613411245.jpg
                                            move_uploaded_file($_FILES["txtcatimg"]["tmp_name"],"uploads/category/".$newname);
                                            // Image Upload
                                        }
                                       

                                        $result = mysqli_query($conn,"update tbl_category set cat_name='".$_POST["txtcatname"]."',cat_image='".$newname."' where cat_id='".$_GET["id"]."'") or die(mysqli_error($conn));
                                        if($result==true)
                                        {
                                            echo "<script>window.location='Viewcategory.php';</script>";
                                        }
                                        else
                                        {
                                            ?>
                                            <div class="alert alert-danger alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                    <strong>Error!</strong> Data not inserted!
                                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                </div>
                                            <?php
                                        }
                                    }
                                    ?>






                                     <?php
                                    $id=$_GET["id"];
                                    $resultupdate = mysqli_query($conn,"select * from tbl_category where cat_id='".$_GET["id"]."'") or die(mysqli_error($conn));
                                            $count=1;
                                            while($rowupdate=mysqli_fetch_assoc($resultupdate))
                                            {
                                    ?>





                                    <form method="post" enctype="multipart/form-data" id="cat-form">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Category Name</label>
                                            <div class="col-sm-9">
                                                <input value="<?php echo $rowupdate["cat_name"]; ?>" name="txtcatname" type="text" class="form-control" placeholder="Category Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Category Image</label>
                                            <div class="col-sm-9">
                                                <input name="txtcatimg" type="file" class="form-control" placeholder="Password">
                                                <a href="uploads/category/<?php echo $rowupdate["cat_image"]; ?>" target="_blank"><img src="uploads/category/<?php echo $rowupdate["cat_image"]; ?>" width="100" height="100"/></a>
                                                <input type="hidden" name="oldimage" value="<?php echo $rowupdate["cat_image"]; ?>"/>
                                                
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button name="btnadd" type="submit" class="btn btn-primary float-right">Update</button>
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


                $('#cat-form').validate({
                    rules:
                    {
                        txtcatname:
                        {
                            required:true
                        }
                       
                    },
                    messages:
                    {
                        txtcatname:
                        {
                            required:"Please Enter Category name",
                        }
                    }

                });




        });
    </script>


</body>


<!-- Mirrored from koki.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 08:04:37 GMT -->
</html>