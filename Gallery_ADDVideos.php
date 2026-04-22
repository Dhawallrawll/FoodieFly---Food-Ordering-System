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
                            <h4>Videos</h4>
                            <span>Add Videos </span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Videos</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Videos</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                   
					
					
                    <div class="col-xl-1 col-lg-12"></div>
					<div class="col-xl-10 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Videos</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">


                                	<?php
                                	if(isset($_POST["sssbtn"]))
                                	{
                                		$result = mysqli_query($conn,"insert into tbl_videos(Title,Video_url) values ('".$_POST["tttitle"]."','".$_POST["Videourl"]."')") or die(mysqli_error($conn));
                                		if($result==true)
                                		{
                                			echo "Insreted";
                                		}
                                		else
                                		{
                                			echo "Error";
                                		}
                                	}
                                	?>
                                    <form method="post" id="video-form">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Title</label>
                                            <div class="col-sm-9">
                                                <input name="tttitle"  type="text" class="form-control" placeholder="Title">
                                            </div>
                                        </div>
                                        
                                        
                                       <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Video</label>
                                            <div class="col-sm-9">
                                                <input name="Videourl" type="text" class="form-control" placeholder="Video Url">
                                            </div>
                                        </div>    

 
                    <div class="form-group row">
                                 <label class="col-sm-3 col-form-label">Active</label>
                            
                             <div class="col-sm-9">
                                   
                                        <div class="form-control">
                                            <label class="radio-inline mr-3"><input type="radio" name="optradio"> Yes</label>
                                            <label class="radio-inline mr-3"><input type="radio" name="optradio"  checked=""> No</label>
                                        </div>  
                                        
                                   
                                </div>
                            </div>
                     
                     
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button name="sssbtn" type="submit" class="btn btn-primary float-right">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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


                $('#video-form').validate({
                    rules:
                    {
                        tttitle:
                        {
                            required:true
                        },
                        Videourl:
                        {
                            required:true
                        }
                        
                    },
                    messages:
                    {
                        tttitle:
                        {
                            required:"Please Enter Vidoe Title"
                        },
                        Videourl:
                        {
                            required:"Please Enter Url"
                        }
                       
                    }

                });




        });
    </script>
     


</body>


<!-- Mirrored from koki.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 08:04:37 GMT -->
</html>