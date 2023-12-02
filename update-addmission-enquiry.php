<?php

session_start();
include 'db.php';


$name=$_SESSION["namez"];
$uid=$_SESSION['uid'];
if(empty($uid)) {
	header("Location:index.php");
}
$id=$_GET['enqid'];
if( isset($_POST['submit'])  ) {
       
	 $EnqDate=$_POST['enqdate'];
     $ChildName=$_POST['childName'];
	 $Age=$_POST['age'];
	 $Gender=$_POST['sgender'];
	 $Class=$_POST['class'];
	 $studetnAddress=$_POST['saddress'];
	 $PschoolName=$_POST['PschoolName'];
	 $PschoolBoard=$_POST['PschoolBoard'];
	 $PschoolLeave=$_POST['PschoolLeave'];
     
	 $FatherName=$_POST['sfname'];
	 $FOccupation=$_POST['Occupation'];
	 $FatherMNo=$_POST['FatherMNo'];
	 $Femail=$_POST['femail'];
	 $MotherName=$_POST['smname'];

	$MOccupation=$_POST['MOccupation'];
    $MotherMNo=$_POST['MotherMNo'];
	$memail=$_POST['memail'];

	$Come=$_POST['Come'];
	$enqhandle=$_POST['enqhandle'];
	$enqtype=$_POST['enqtype'];
	$remark=$_POST['remark'];


	 $followup=$_POST['followup'];
     $status=$_POST['status'];
     $id=$_POST['Oid'];


	$sql = mysqli_query($conn,"update office_enq set enqdate='$EnqDate',childName='$ChildName',age='$Age',sgender='$Gender',class='$Class',saddress='$studetnAddress',PschoolBoard='$PschoolBoard',PschoolLeave='$PschoolLeave',sfname='$FatherName' ,Occupation='$FOccupation',FatherMNo='$FatherMNo',femail='$Femail',smname='$MotherName',MOccupation='$MOccupation',MotherMNo='$MotherMNo',memail='$memail',Come='$Come',enqhandle='$enqhandle',enqtype='$enqtype',remark='$remark',followup='$followup',status='$status' where Oid='$id'") or die(mysqli_error($conn));
	
   
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Student details added successfully!!..');</script>";
					  echo "<script>document.location='all-admission-enquiry.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error while adding details!!..');</script>";
					  echo "<script>document.location='all-admission-enquiry.php'</script>";
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
                    <a href="index.php">
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
                        <a href="index.php"><img src="img/icon.png" alt="logo"></a>
                    </div>
                </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="index.php" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
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
                    <h3>Desk Enquiry</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Office</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Enquiry Form</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                            <?php
				$sql=mysqli_query($conn,"select * from office_enq where Oid='$id'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                <input type="hidden" class="form-control" name="Oid" value="<?php echo $id; ?>">
                                    <label>Date Of Enquiry</label>
                                    <input type="date" placeholder="dd/mm/yyyy" name="enqdate" class="form-control air-datepicker" data-position='bottom right' value="<?php echo $row['enqdate']; ?>">
                                   
                                </div>
								
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Name of Child</label>
                                    <input type="text" placeholder="Name of Child" name="childName" class="form-control" value="<?php echo $row['childName']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                  <label>Age</label>
                                    <select name="age" class="form-control" >
									<option value="">Please select</option>
                                        <option value="1">3</option>
                                        <option value="2">4</option>
                                        <option value="3">5</option>
										<option value="4">6</option>
										<option value="5">7</option>
										<option value="6">8</option>
                                        <option value="7">9</option>
                                        <option value="8">10</option>
										<option value="9">11</option>
										<option value="10">12</option>
										<option value="11">13</option>
                                        <option value="12">14</option>
                                        <option value="13">15</option>
										<option value="14">16</option>
										<option value="15">17</option>
										<option value="16">18</option>
                                    </select>
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Gender</label>
                                    <div class="col-sm-18">
                                        <select name="sgender" class="form-control">
										<option value="">Please select</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
									</div>
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Enquiry for Grade</label>
                                    <div class="col-sm-18">
                                        <select name="class" class="form-control" value="<?php echo $row['class']; ?>">
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
								
								<div class="col-lg-12 col-8 form-group">
                                    <label>Student Detailed Address</label>
                                    <textarea class="textarea form-control" name="saddress" id="form-message" cols="10" rows="8" value="<?php echo $row['saddress']; ?>"></textarea>
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Previous School Name</label>
                                    <input type="text" placeholder="Previous School Name" name="PschoolName" class="form-control"value="<?php echo $row['PschoolName']; ?>">
                                </div>
								
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Previous School Board</label>
                                    <input type="text" placeholder="Previous School Board" name="PschoolBoard" class="form-control"value="<?php echo $row['PschoolBoard']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Previous School Leaving Reason</label>
                                    <input type="text" placeholder="Previous School Leaving Reason" name="PschoolLeave" class="form-control" value="<?php echo $row['PschoolLeave']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Student's Father Name</label>
                                    <input type="text" placeholder="Student's Father Name" name="sfname" class="form-control" value="<?php echo $row['sfname']; ?>" >
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Father Occupation</label>
                                    <input type="text" placeholder="Occupation" name="Occupation" class="form-control" value="<?php echo $row['Occupation']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Father Mobile Number</label>
                                    <input type="text" placeholder="Father Mobile Number" name="FatherMNo" class="form-control" value="<?php echo $row['FatherMNo']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Father Email Id</label>
                                    <input type="text" placeholder="Father Email Id" name="femail" class="form-control"value="<?php echo $row['femail']; ?>">
                                </div>
                                
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Student's Mother Name</label>
                                    <input type="text" placeholder="Student's Mother Name" name="smname" class="form-control" value="<?php echo $row['smname']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Mother Occupation</label>
                                    <input type="text" placeholder="Occupation" name="MOccupation" class="form-control" value="<?php echo $row['MOccupation']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Mother Mobile Number</label>
                                    <input type="text" placeholder="Mother Mobile Number" name="MotherMNo" class="form-control" value="<?php echo $row['MotherMNo']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Mother Email Id</label>
                                    <input type="text" placeholder="Mother Email Id" name="memail" class="form-control" value="<?php echo $row['memail']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>How do you come to know about Eureka School?</label>
                                    <input type="text" placeholder="About Eureka School" name="Come" class="form-control" value="<?php echo $row['Come']; ?>">
                                </div>
								
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Enquiry Handled By</label>
                                    <input type="text" placeholder="Enquiry Handled By" name="enqhandle" class="form-control" value="<?php echo $row['enqhandle']; ?>">
                                </div>
							*********************************************************	
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Enquiry Type</label>
                                    <input type="text" placeholder="Walk-in / Telephonic / Other" name="enqtype" class="form-control"value="<?php echo $row['enqtype']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Remarks by Admission counsellor</label>
                                    <input type="text" placeholder="Remarks by Admission counsellor" name="remark" class="form-control" value="<?php echo $row['remark']; ?>">
                                </div>
								
                                <div class="col-lg-12 col-8 form-group">
                                    <label>Followup</label>
                                    <textarea class="textarea form-control" name="followup" id="form-message" cols="10" rows="8" value="<?php echo $row['followup']; ?>"></textarea>
                                </div>
								
								<div class="col-lg-12 col-8 form-group">
                                    <label>Status</label>
                                    <textarea class="textarea form-control" name="status" id="form-message" cols="10" rows="8"value="<?php echo $row['status']; ?>"></textarea>
                                </div>
                                <?php }?>
                                <div class="col-12 form-group mg-t-8">
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