<?php

session_start();
include 'db.php';


$id=$_GET['studentgid'];
if( isset($_POST['submit'])  ) {
       
	$sfirstname=$_POST['sfirstname'];
	$smiddlename=$_POST['smiddlename'];
	$slastname=$_POST['slastname'];
	$class=$_POST['class'];
	$section=$_POST['section'];
	$person=$_POST['person'];
	$relation=$_POST['relation'];
	$mobile=$_POST['mobile'];
	$reason=$_POST['reason'];
	$date=$_POST['date'];
	$outtime=$_POST['outtime'];
	$id=$_POST['sgid'];
	
	$sql = mysqli_query($conn,"update studentgate set sfirstname='$sfirstname',smiddlename='$smiddlename',slastname='$slastname',class='$class',section='$section',person='$person',relation='relation',mobile='$mobile',reason='$reason',date='$date',outtime='$outtime' where sgid='$id'") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('student details updated successfully!!..');</script>";
					  echo "<script>document.location='all-studentgate.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error while updating student details!!..');</script>";
					  echo "<script>document.location='studentgate.php'</script>";
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
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index1.php">Home</a>
                        </li>
                        <li>Student Gate Pass Form</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Student Gate Pass</h3>
                            </div>
                         </div>
                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                            <?php
                                        $sql=mysqli_query($conn,"select * from studentgate where sgid='$id'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>First Name</label>
                                    <input type="hidden" class="form-control" name="sgid" value="<?php echo $id; ?>">
                                    <input type="text" placeholder="First Name" name="sfirstname" class="form-control" value="<?php echo $row['sfirstname']; ?>">
                                </div>
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Middle Name</label>
                                    <input type="text" placeholder="Middle Name" name="smiddlename" class="form-control" value="<?php echo $row['smiddlename']; ?>">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last Name" name="slastname" class="form-control" value="<?php echo $row['slastname']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                  <label>Class</label>
                                      <div class="col-sm-9">
                                            <select name="class" class="form-control">
												<option value="">Please select</option>
												<option value="Playgroup">Playgroup</option>
												<option value="Nursery">Nursery</option>
												<option value="Junior kG">Junior KG</option>
												<option value="Senior Kg">Senior KG</option>
												<option value="1st">1st</option>
												<option value="2nd">2nd</option>
												<option value="3rd">3rd</option>
												<option value="4th">4th</option>
												<option value="5th">5th</option>
												<option value="6th">6th</option>
												<option value="7th">7th</option>
												<option value="8th">8th</option>
												<option value="9th">9th</option>
												<option value="10th">10th</option>
											</select>
                                        </div>
									</div>
									<div class="col-xl-4 col-lg-6 col-12 form-group">
                                  <label>Division</label>
                                    <select name="section" class="form-control">
									<option value="">Please select</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
										<option value="4">D</option>
										<option value="5">E</option>
                                    </select>
                                </div>
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Name of Person</label>
                                    <input type="text" placeholder="Name of Person" name="person" class="form-control" value="<?php echo $row['person']; ?>">
                                </div>
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Relation with Student</label>
                                    <input type="text" placeholder="Relation with Student" name="relation" class="form-control" value="<?php echo $row['relation']; ?>">
                                </div>
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Contact No.</label>
                                    <input type="text" placeholder="Mobile/Tel" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>">
                                </div>
                                
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Reason for Going Out</label>
                                    <input type="text" placeholder="Reason for Going Out" name="reason" class="form-control" value="<?php echo $row['reason']; ?>">
                                </div>
								
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Date</label>
                                    <input type="date" placeholder="dd/mm/yyyy" name="date" class="form-control air-datepicker" data-position='bottom right' value="<?php echo $row['date']; ?>">
                                </div>
                                
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Out Time</label>
                                    <input type="time" placeholder="Out Time" name="outtime" class="form-control" value="<?php echo $row['outtime']; ?>">
                                </div>
                                <?php } ?>								<div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="submit" value="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html>