<?php 

include 'db.php';

$id=$_GET['ddid'];


	$sql=mysqli_query($conn, "delete from driverdetails where d_id='$id'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='all-driver.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='all-driver.php'</script>";
	}
	
 
?>