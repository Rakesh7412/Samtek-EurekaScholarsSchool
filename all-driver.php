<?php
include 'db.php';
?>


<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eureka Scholar's School</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index1.php">
                        <img src="img/icon.png" alt="logo"><span style="font-size:1vw","color:red;">Eureka Scholar's School</span>
                     </a>
					
                </div>
                <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
                <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                            </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Find Something . . .">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">Eureka School</h5>
                                <span>Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">Eureka School</h6>
                            </div>
                         </div>
                    </li>
                     </div>
                        </div>
                    </li>
                 </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
           <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index1.php"><img src="img/icon.png" alt="logo"></a>
                    </div>
                </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="index1.php" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                        </li>
						<li class="nav-item sidebar-nav-item">
                            <a href="enquiry.php" class="nav-link"><i class="flaticon-dashboard"></i><span>Website Enquiry</span></a>
                         </li>
						<li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>Visitors</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="visitors.php" class="nav-link"><i class="fas fa-angle-right"></i>Visitior's Form</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-visitors.php" class="nav-link"><i class="fas fa-angle-right"></i>All Visitor's</a>
                                </li>
                            </ul>
                        </li>
						
						<li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Enquiry</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="admission_enquiry.php" class="nav-link"><i class="fas fa-angle-right"></i>Admission
                                        Enquiry</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-admission-enquiry.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Admission Enquiry</a>
                                </li>
                            </ul>
                        </li>
						<li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Notice Board</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="add-notice1.php" class="nav-link"><i class="fas fa-angle-right"></i>Notice-1
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-notice2.php" class="nav-link"><i class="fas fa-angle-right"></i>Notice-2
										</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-notice3.php" class="nav-link"><i class="fas fa-angle-right"></i>Notice-3
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="manage_notice1.php" class="nav-link"><i class="fas fa-angle-right"></i>Manage Notice
                                        </a>
                                </li>
							</ul>
                        </li>
						<li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="add-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Teachers</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="all-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Teacher</a>
                                </li>
                            </ul>
                        </li>
						<li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Subject</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-subject.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Subject</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-subject.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Subject</a>
                                </li>
								<li class="nav-item">
                                    <a href="subject-combination.php" class="nav-link"><i class="fas fa-angle-right"></i>Combination of Subjects</a>
                                </li>
								<li class="nav-item">
                                    <a href="all-subject-combination.php" class="nav-link"><i class="fas fa-angle-right"></i>All Combination of Subjects</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="admit-form.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-details.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Student Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-student.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>All Student</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="add-class.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-class.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Class</a>
                                </li>
                            </ul>
                        </li>
						<li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Attendance</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="attendance.php" class="nav-link"><i class="fas fa-angle-right"></i>Attendance
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="manage-attendance.php" class="nav-link"><i class="fas fa-angle-right"></i>Attendance 
									Sheet</a>
                                </li>
                            </ul>
                        </li>
						
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Result's</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="add-student-result.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Student Result</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-result.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>All Student Result</a>
                                </li>
                                <li class="nav-item">
                                    <a href="generate-result.php" class="nav-link"><i class="fas fa-angle-right"></i>Generate
                                        Result</a>
                                </li>
								<li class="nav-item">
                                    <a href="view-result.php" class="nav-link"><i class="fas fa-angle-right"></i>View
                                        Result</a>
                                </li>
                            </ul>
                        </li>
                        
						
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Inventory</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="add-category.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Category</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-category.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>All Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-subcategory.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Sub-Category</a>
                                </li>
								<li class="nav-item">
                                    <a href="all-subcategory.php" class="nav-link"><i class="fas fa-angle-right"></i>Manage
                                        Sub-Category</a>
                                </li>
								<li class="nav-item">
                                    <a href="add-product.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Product</a>
                                </li>
								<li class="nav-item">
                                    <a href="all-product.php" class="nav-link"><i class="fas fa-angle-right"></i>Manage
                                        Product</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>Gate Pass</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="staffgate.php" class="nav-link"><i class="fas fa-angle-right"></i>Staff Gate Pass</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-staffgate.php" class="nav-link"><i class="fas fa-angle-right"></i>All-Staff-Gate-Pass</a>
                                </li>
                                <li class="nav-item">
                                    <a href="studentgate.php" class="nav-link"><i class="fas fa-angle-right"></i>Student Gate Pass</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-studentgate.php" class="nav-link"><i class="fas fa-angle-right"></i>All-Student-Gate-Pass</a>
                                </li>
                                <li class="nav-item">
                                    <a href="parentsgate.php" class="nav-link"><i class="fas fa-angle-right"></i>Parents Gate Pass</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-parentsgate.php" class="nav-link"><i class="fas fa-angle-right"></i>All-Parent-Gate-Pass</a>
                                </li>
                            </ul>
                        </li>
						
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>Transport</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="vehical.php" class="nav-link"><i class="fas fa-angle-right"></i>Vehicle Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-transport.php" class="nav-link"><i class="fas fa-angle-right"></i>All Vehicle Details</a>
                                </li>

                                <li class="nav-item">
                                    <a href="driveridetails.php" class="nav-link"><i class="fas fa-angle-right"></i>Driver Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-driver.php" class="nav-link"><i class="fas fa-angle-right"></i>All-Driver Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-staff-details.php" class="nav-link"><i class="fas fa-angle-right"></i>Students_Staff Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-student-staff-transport.php" class="nav-link"><i class="fas fa-angle-right"></i>All-Students_Staff Details</a>
                                </li>
                            </ul>
                        </li>  
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Login</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="principal-reg.php" class="nav-link"><i class="fas fa-angle-right"></i>Admin(Principal)</a>
                                </li>
                                <li class="nav-item">
                                    <a href="supervisor-reg.php" class="nav-link"><i class="fas fa-angle-right"></i>Supervisor</a>
                                </li>
                                <li class="nav-item">
                                    <a href="teacher-register.php" class="nav-link"><i class="fas fa-angle-right"></i>Teacher</a>
                                </li>
                                <li class="nav-item">
                                    <a href="headm1-reg.php" class="nav-link"><i class="fas fa-angle-right"></i>Head Mistress1</a>
                                </li>
                                <li class="nav-item">
                                    <a href="headm2-reg.php" class="nav-link"><i class="fas fa-angle-right"></i>Head Mistress 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="crm-reg.php" class="nav-link"><i class="fas fa-angle-right"></i>CRM</a>
                                </li>
                                <li class="nav-item">
                                    <a href="parent-reg.php" class="nav-link"><i class="fas fa-angle-right"></i>Parent</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-reg.php" class="nav-link"><i class="fas fa-angle-right"></i>Student</a>
                                </li>
                                <li class="nav-item">
                                    <a href="gate-reg.php" class="nav-link"><i class="fas fa-angle-right"></i>Gate</a>
                                </li>
                                <li class="nav-item">
                                    <a href="user.php" class="nav-link"><i class="fas fa-angle-right"></i>Manage-All-User</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Driver Details</h3>
                    <ul>
                        <li>
                            <a href="index1.php">Home</a>
                        </li>
                        <li>Driver</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Class Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Driver Details</h3>
                            </div>
                            
                        </div>

                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
								<thead>
									<tr>
										<th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
												<th>Driver Name</th>
												<th>Address</th>
												<th>Adhar Number</th>
                                                <th>Permanent Address</th>
												<th>Contact Number</th>
												<th>License Number</th>
												<th>Date of Joining</th>
												<th>Vehical Type</th>
												<th>Previous Organization</th>
												<th>Action</th>
											</tr>
                                        </thead>
										 <?php
											$i=1;
										  
										  $results1 = mysqli_query($conn, "select * from driverdetails");
										  while ($row1 = mysqli_fetch_array($results1)) { 
									
										  ?>
                                        <tbody id="geeks">
                                            <tr>
                                                <td><?php echo $i; ?></td>
												  <td><?php echo $row1['name'];?></td>
												  <td><?php echo $row1['address'];?></td>
												  <td><?php echo $row1['adhar'];?></td>
												  <td><?php echo $row1['paddress'];?></td>
												  <td><?php echo $row1['mobile'];?></td>
												  <td><?php echo $row1['license'];?></td>
												  <td><?php echo $row1['date'];?></td>
												  <td><?php echo $row1['vehicaltype'];?></td>
												  <td><?php echo $row1['previous'];?></td>
												  <td>
												  <a href="updatedriver.php?ddid=<?php echo $row1['d_id']; ?>" ><i class="fa fa-edit" style="font-size: 20px;color: black"></i></a>
												  <a href="deletedriver.php?ddid=<?php echo $row1['d_id']; ?>" ><i class="fa fa-trash" onclick="doconfirm()" style="font-size: 20px;color: red;" ></i></a></td>
													<?php $i++;  } ?>
														</tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Class Table Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">Copyright ©2022, All rights reserved by Eureka Scholars School Website Powered by SamTek iT Labs</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html>			