<?php 


include 'db.php';

$id=$_GET['ssrid'];
	
	$sql=mysqli_query($conn, "delete from transport_student_staff where ssid='$id'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='all-student-staff-transport.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='all-student-staff-transport.php'</script>";
	}
	


?>