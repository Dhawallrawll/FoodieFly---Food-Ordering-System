<?php
session_start();

if(!isset($_SESSION["islogin"]))
{
    echo "<script>window.location='index.php';</script>";
}
?>

<div class="nav-header">
            <a href="index-2.html" class="brand-logo">
                <img class="logo-abbr" src="images/logo.png" alt="">
                <img class="logo-compact" src="images/delicious%20ordering.png" alt="">
                <img class="brand-title" src="images/delicious%20ordering.png" alt="">
                <!-- <p class="brand-title">FAFO</p>
                <p class="brand-title">Restaurant</p> -->

            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>



<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    
                      <li><a href="Dashboard.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Menu</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="Viewcategory.php">View Category</a></li>
                            
                            <li><a href="Viewsubcategory.php">View Sub Category</a></li>
                            
                            <li><a href="Menu1.php">Menu</a></li>
                           
                        </ul>
                    </li>
                    
                  
                     <li><a href="Viewuser.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">User</span>
						</a>
					</li>
                    
                    
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Order</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="All_orders.php">All orders</a></li>
                            <li><a href="Order_pending.php">Pending</a></li>
                            <li><a href="Order_process.php">Process</a></li>
                            <li><a href="Order_Complete.php">Completed</a></li>
                    </ul>
                    </li>
                    
                    
                     <li><a href="Review.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Review</span>
						</a>
					</li>
                       
                    
                     <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Utility</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="Utility_Feedback.php">Feedback</a></li>
                    </ul>
                    </li>
                    
                    
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="Table_Tables.php">Tables</a></li>
                            <li><a href="Table_Booking.php">Booking</a></li>
                    </ul>
                    </li>
                
                    
                    
                    
                </ul>
                
				
			</div>
        </div>