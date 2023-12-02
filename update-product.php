<?php

session_start();
include 'db.php';



	
$proid=$_GET['productid'];
if( isset($_POST['submit'])  ) {
   
	$ProductName=$_POST['ProductName'];
	$CategoryName=$_POST['CategoryName'];
	$SubCategoryName=$_POST['SubCategoryName'];
	$Dimension=$_POST['Dimension'];
	$Noofcontents=$_POST['Noofcontents'];
	$Specification=$_POST['Specification'];
	$code=$_POST['code'];
	$ColourPrint=$_POST['ColourPrint'];
	
	$ColourCode=$_POST['ColourCode'];
    $proid=$_POST['proid'];

    $imgFile1 = $_FILES["Image1"]["name"]; 
	$imgFile2 = $_FILES["Image2"]["name"]; 
	$imgFile3 = $_FILES["Image3"]["name"]; 
	$imgFile4 = $_FILES["Image4"]["name"]; 
   
	$ProductDescription=$_POST['ProductDescription'];
	$ProductInformation=$_POST['ProductInformation'];
	$CareInstructions=$_POST['CareInstructions'];
    $Price=$_POST['Price'];

	

	$img1=$_POST['img1'];
	$img2=$_POST['img2'];
	$img3=$_POST['img3'];
	$img4=$_POST['img4'];
	
	if($imgFile1){
		$pic1=$_FILES['Image1']['name'];;
	}
	else{
		$pic1=$img1;
	}
	if($imgFile2){
		$pic2=$_FILES['Image2']['name'];;
	}
	else{
		$pic2=$img2;
	}
	if($imgFile3){
		$pic3=$_FILES['Image3']['name'];;
	}
	else{
		$pic3=$img3;
	}
	if($imgFile4){
		$pic4=$_FILES['Image4']['name'];;
	}
	else{
		$pic4=$img4;
	}
	
	
        $target_dir = "Images/";
 if(!is_dir($target_dir))
 {
mkdir($target_dir, 0777, true);
 }
$target_file1 = $target_dir . basename($_FILES["Image1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["Image2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["Image3"]["name"]);
$target_file4 = $target_dir . basename($_FILES["Image4"]["name"]);

move_uploaded_file($_FILES["Image2"]["tmp_name"], $target_file2);
move_uploaded_file($_FILES["Image3"]["tmp_name"], $target_file3);
move_uploaded_file($_FILES["Image4"]["tmp_name"], $target_file4);
 
 if (move_uploaded_file($_FILES["Image1"]["tmp_name"], $target_file1)) 
 {
    echo "The file ". basename( $_FILES["Image1"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
 
	
   
  $sql=mysqli_query($conn, "update product set ProductName='$ProductName',CategoryName='$CategoryName',SubCategoryName='$SubCategoryName',Dimension='$Dimension',Noofcontents='$Noofcontents',Specification='$Specification',code='$code',ColourPrint='$ColourPrint',ColourCode='$ColourCode',ProductDescription='$ProductDescription',ProductInformation='$ProductInformation',CareInstructions='$CareInstructions',Price='$Price' where proid='$proid'") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('product updated successfully!!..');</script>";
					  echo "<script>document.location='all-product.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error while adding details!!..');</script>";
					  echo "<script>document.location='manage_product.php'</script>";
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
                    <h3>Desk Enquiry</h3>
                    <ul>
                        <li>
                            <a href="index1.php">Home</a>
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
                                <h3>Product Form</h3>
                            </div>
                        </div>
                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                            <div class="row">
							<?php
				$sql=mysqli_query($conn,"select * from product where proid='$proid'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Product Name</label>
                                    <input type="hidden" class="form-control" name="proid" value="<?php echo $proid; ?>">
                                    <input type="text" placeholder="Product Name" name="ProductName" class="form-control air-datepicker" data-position='bottom right' value="<?php echo $row['ProductName']; ?>">
                                  
                                </div>
								
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
										<label>Category Name</label>
												<div class="col-sm-18">
                                            <select name="CategoryName" class="form-control" name="CategoryName">
												<option value="">Please select</option>
												<?php 
					$sql=mysqli_query($conn,"select * from category");
					while($row=mysqli_fetch_array($sql)) {
					?>
												<option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option><?php } ?>
											</select>
                                        </div>
									</div>
									
									<div class="col-xl-3 col-lg-6 col-12 form-group">
										<label>Sub-Category Name</label>
												<div class="col-sm-18">
                                            <select name="SubCategoryName" class="form-control">
												<option value="">Please select</option>
												<?php 
													$sql=mysqli_query($conn,"select * from subcategory");
													while($row=mysqli_fetch_array($sql)) {
												?>
												<option value="<?php echo $row['subid']; ?>"><?php echo $row['scname']; ?> (<?php echo $row['scode']; ?>)</option><?php } ?>
											</select>
                                        </div>
									</div>
                                    <?php
				$sql=mysqli_query($conn,"select * from product where proid='$proid'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Dimensions</label>
                                    <input type="text" placeholder="Dimensions" name="Dimension" class="form-control" value="<?php echo $row['Dimension']; ?>">
                                </div>
								
								 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Number of Contents</label>
                                    <input type="text" placeholder="Number of Contents" name="Noofcontents" class="form-control" value="<?php echo $row['Noofcontents']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Specification</label>
                                    <input type="text" placeholder="Specification" name="Specification" class="form-control" value="<?php echo $row['Specification']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Code</label>
                                    <input type="text" placeholder="Code" class="form-control" name="code" value="<?php echo $row['code']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Colour/Print</label>
                                    <input type="text" placeholder="Colour/Print" name="ColourPrint" class="form-control" value="<?php echo $row['ColourPrint']; ?>">
                                </div>
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Colour Code</label>
                                    <input type="text" placeholder="Colour Code" name="ColourCode" class="form-control" value="<?php echo $row['ColourCode']; ?>">
                                </div>
								
								<div class="col-xl-8 col-lg-6 col-12 form-group">
								<div class="row">
									<div class="col-md-6">
										<label for="exampleInputEmail1">Image1</label>
										<input type="file" class="form-control" name="Image1" id="exampleInputEmail1" placeholder="image">
									</div>
                                    <input type="hidden" class="form-control" name="img1" value="<?php echo $row['Image1']; ?>">
				   <input type="hidden" class="form-control" name="img2" value="<?php echo $row['Image2']; ?>">
				    <input type="hidden" class="form-control" name="img3" value="<?php echo $row['Image3']; ?>">
					 <input type="hidden" class="form-control" name="img4" value="<?php echo $row['Image4']; ?>">


									<div class="col-md-6">
										<label for="exampleInputEmail1">Image2</label>
										<input type="file" class="form-control" name="Image2" id="exampleInputEmail1">
									</div>
								</div>
								</div><br>
				   
								<div class="col-xl-8 col-lg-6 col-12 form-group">
								<div class="row">
									<div class="col-md-6">
										<label for="exampleInputEmail1">Image3</label>
										<input type="file" class="form-control" name="Image3" id="exampleInputEmail1">
									</div>
				  
									<div class="col-md-6">
										<label for="exampleInputEmail1">Image4</label>
										<input type="file" class="form-control" name="Image4" id="exampleInputEmail1" >
									</div>
								</div>
								</div>
								
								<div class="col-lg-12 col-8 form-group">
                                    <label>Product Description</label>
                                    <textarea class="textarea form-control" name="ProductDescription" id="form-message" cols="10" rows="8"><?php echo $row['ProductDescription']; ?></textarea>
                                </div>
								
								<div class="col-lg-12 col-8 form-group">
                                    <label>Product Information</label>
                                    <textarea class="textarea form-control" name="ProductInformation" id="form-message" cols="6" rows="8"><?php echo $row['ProductInformation']; ?></textarea>
                                </div>
								
								<div class="col-lg-12 col-6 form-group">
                                    <label>Care Instructions</label>
                                    <textarea class="textarea form-control" name="CareInstructions" id="form-message" cols="6" rows="8" <?php echo $row['CareInstructions']; ?>><?php echo $row['CareInstructions']; ?></textarea>
                                </div>
								
								<div class="col-xl-12 col-lg-6 col-12 form-group">
                                    <label>Price</label>
                                    <input type="text" placeholder="Price" name="Price"  class="form-control" value="<?php echo $row['Price']; ?>">
                                </div>
								<?php }?>
                <?php }?>
								<div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
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