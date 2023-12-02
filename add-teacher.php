<?php

session_start();
include 'db.php';

if( isset($_POST['submit'])  ) {
       
	$tfirstname=$_POST['tfirstname'];
	$tmiddlename=$_POST['tmiddlename'];
	$tlastname=$_POST['tlastname'];
	$tcampus=$_POST['tcampus'];
	$temail=$_POST['temail'];
	$tmobile=$_POST['tmobile'];
	$tgender=$_POST['tgender'];
	$tdob=$_POST['tdob'];
    $taddress=$_POST['taddress'];
	$tcity=$_POST['tcity'];
   
	$sql = mysqli_query($conn,"INSERT INTO staffdetails(tfirstname,tmiddlename,tlastname,tcampus,temail,tmobile,tgender,tdob,taddress,tcity)VALUES ('$tfirstname','$tmiddlename','$tlastname','$tcampus','$temail','$tmobile','$tgender','$tdob','$taddress','$tcity')") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Staff details added successfully!!..');</script>";
					  echo "<script>document.location='all-teacher.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error while adding details!!..');</script>";
					  echo "<script>document.location=''</script>";
	} 
	
}
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
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index1.php">Home</a>
                        </li>
                        <li>Add New Teacher</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Teacher</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>First Name</label>
                                    <input type="text" placeholder="First Name" name="tfirstname" class="form-control">
                                </div>
								
								 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Middle Name</label>
                                    <input type="text" placeholder="Middle Name" name="tmiddlename" class="form-control">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last Name" name="tlastname" class="form-control">
                                </div>
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Campus</label>
                                    <input type="text" placeholder="Campus" name="tcampus" class="form-control">
                                </div>
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Employee E-Mail ID</label>
                                    <input type="email" placeholder="Employee E-Mail ID" name="temail" class="form-control">
                                </div>
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="Mobile/Tel" name="tmobile" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Gender</label>
                                    <div class="col-sm-18">
                                        <select name="tgender" class="form-control">
										<option value="">Please select</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
									</div>
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" placeholder="" name="tdob" class="form-control air-datepicker" data-position='bottom right'>
                                </div>
                                
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>City</label>
                                    <input type="text" placeholder="City" name="tcity" class="form-control">
                                </div>
								
                                <div class="col-lg-12 col-8 form-group">
                                    <label>Employee's Detailed Address</label>
                                    <textarea class="textarea form-control" name="taddress" id="form-message" cols="10" rows="8"></textarea>
                                </div>
								
								<div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="submit" value="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                                  </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">Copyright ©2022, All rights reserved by Eureka Scholars School Website Powered by SamTek iT Labs</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="js/jquery.smoothscroll.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html>