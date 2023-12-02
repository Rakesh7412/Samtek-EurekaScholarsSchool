<?php

session_start();
include 'db.php';




if( isset($_POST['submit'])  ) {
    // $intal=$_POST['instal'];
	$installments=$_POST['installments'];
	$fees=$_POST['fees'];
	$discount=$_POST['discount'];
	$fine=$_POST['fine'];
	$consession=$_POST['consession'];
	$pfid=$_POST['pfid'];
	
	$sql = mysqli_query($conn,"update playgrp_fees set installments='$installments',fees='$fees',discount='$discount',fine='$fine',consession='$consession' where pfid='$pfid'") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('fees details updated successfully!!..');</script>";
					  echo "<script>document.location='playgrp_fees.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error while adding fees details!!..');</script>";
					  echo "<script>document.location='playgrp_fees.php'</script>";
	} 
	if ($intal=$fees/3){
        echo $intal;
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
      
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <center><div class="breadcrumbs-area">
                    <h3>Eureka Scholars School Payment Page</h3>
                    <ul>
                        
                        <li>Payment Details</li>
                    </ul>
                </div></center>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                       
                        </div>
                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                           
								
								
								<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Student Full Name</label>
                                    <input type="text" placeholder="Student Full Name" name="fees" class="form-control" >
                                </div>

                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Select Student Class</label>
                                  
                                    <select name="installments" class="form-control">
					<option value=>Select</option>
					<option value="1">Play-Group</option>
					<option value="2">Grade-1</option>
					<option value="3">Grade-2</option>
					<option value="4">Grade-3</option>
					<option value="5">Grade-4</option>
					<option value="6">Grade-5</option>
					<option value="6">Grade-6</option>
					<option value="6">Grade-7</option>
					<option value="6">Grade-8</option>
					<option value="6">Grade-9</option>
					<option value="6">Grade-10</option>
					</select>
                                </div>

								
                                <!-- <input type="hidden" class="form-control" name="pfid" value="<?php echo $pfid; ?>"> -->
                                <?php
				$sql=mysqli_query($conn,"select * from playgrp_fees where pfid='$pfid'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
               
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Amount</label>
                                    <input type="text" placeholder="discount" name="discount" class="form-control">
                                </div>
								<?php } ?>
								
                               
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="submit" value="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Pay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
               <center> <footer class="footer-wrap-layout1">
                    <div class="copyright">Copyright ©2022, All rights reserved by Eureka Scholars School Website Powered by SamTek iT Labs</a></div>
                </footer></center>
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