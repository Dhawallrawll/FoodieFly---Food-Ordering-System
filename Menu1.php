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


<!-- Mirrored from koki.dexignzone.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 08:04:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard viewcategory </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
        <div class="nav-header">
            <a href="index-2.html" class="brand-logo">
                <img class="logo-abbr" src="images/logo.png" alt="">
                <img class="logo-compact" src="images/delicious%20ordering.png" alt="">
                <img class="brand-title" src="images/delicious%20ordering.png" alt="">
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
                            <h4>View Menu</h4>
                            <span>List of Menu</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">View Menu</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">List of Menu</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List of Menu</h4>
                                <a href="Add_Menu.php" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>Add Menu</a>
                                    
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">


                                <?php
                                    if(isset($_POST["btndelete"]))
                                    {
                                        $result=mysqli_query($conn,"delete from tbl_menu where Menu_id='".$_POST["deleteid"]."'");

                                        if($result)
                                        {
                                            ?>
                                    <div class="alert alert-success alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
                                    <strong>Success!</strong> Data Deleted.
                                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                </div>

                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                    <div class="alert alert-danger alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                    <strong>Error!</strong> Data not deleted!
                                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                </div>
                                            <?php
                                        }
                                    }   
                                    ?>




                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Sub category</th>
                                                <th>Tittle</th>
                                                <th>Description</th>
                                                <th>Img 1</th>
                                                <th>Img 2</th>
                                                <th>Img 3</th>
                                                <th>Video</th>
                                                <th>Price</th>
                                                <th>Specification</th>
                                                <th>Active</th>
                                                <th>Time</th>
                                                <th>Weight</th>
                                                <th>Add Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        	 

                                            <?php
                                            $result = mysqli_query($conn,"select s.*,c.subcat_name from tbl_menu as s left join tbl_subcategory as c on c.subcat_id=s.subcat_id") or die(mysqli_error($conn));
                                            $count=1;
                                            while($row=mysqli_fetch_assoc($result))
                                            {
                                            ?>


                                            <tr>
                                                <td><?php echo $count;$count++; ?></td>
                                                 <td><?php echo $row["subcat_name"]; ?></td>
                                                <td><?php echo $row["Title"]; ?></td>
                                                <td><?php echo $row["Description"]; ?></td>
                                                <td><a href="uploads/menu/<?php echo $row["Img1"]; ?>" target="_blank"><img src="uploads/menu/<?php echo $row["Img1"]; ?>" width="100" height="100"/></a></td>
												<td><a href="uploads/menu/<?php echo $row["Img2"]; ?>" target="_blank"><img src="uploads/menu/<?php echo $row["Img2"]; ?>" width="100" height="100"/></a></td>
												<td><a href="uploads/menu/<?php echo $row["Img3"]; ?>" target="_blank"><img src="uploads/menu/<?php echo $row["Img3"]; ?>" width="100" height="100"/></a></td>
												<td><?php echo $row["Video_url"]; ?></td>
												<td><?php echo $row["Price"]; ?></td>
												<td><?php echo $row["Specification"]; ?></td>
												<td><?php echo $row["Active"]; ?></td>
												<td><?php echo $row["A_time"]; ?></td>
												<td><?php echo $row["Weight"]; ?></td>
												<td><?php echo $row["A_datetime"]; ?></td>


                                                <td>
                                                    <button data-id="<?php echo $row["Menu_id"]; ?>" data-toggle="modal" data-target="#basicModal" type="button" class="btn btn-rounded btn-danger btn-sm open-delete" ><span class="btn-icon-left text-danger"><i class="fa fa-trash color-danger"></i>
                                                        </span>Delete</button>
                                                    <button onclick="window.location='Update_Add_Menu.php?id=<?php echo $row["Menu_id"]; ?>';" type="button" class="btn btn-rounded btn-primary btn-sm"><span class="btn-icon-left text-danger"><i class="fa fa-pencil color-danger"></i>
                                                        </span>Edit</button>
                                                </td>
                                            </tr>
                                         

                                          <?php } ?> 
                                        </tbody>
                                        
                                    </table>
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
       <?php include 'footer.php'; ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->
         <div class="modal fade" id="basicModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Warning!</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure you want to delete?</div>
                    <div class="modal-footer">
                        <form method="POST">
                            <input type="hidden" name="deleteid" id="deleteid"/>
                            <button type="button" class="btn btn-danger light" data-dismiss="modal">No</button>
                            <button type="submit" name="btndelete" class="btn btn-primary">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
    


    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

    <script>

        $('.open-delete').click(function(){
            var id=$(this).attr("data-id");
            $('#deleteid').val(id);
        });
    </script>


</body>


<!-- Mirrored from koki.dexignzone.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 08:04:47 GMT -->
</html>