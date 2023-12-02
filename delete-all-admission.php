<?php 
session_start();
$uid=$_SESSION["uid"];
$name=$_SESSION["namez"];
if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';
$id=$_GET['enqid'];

	
	$sql=mysqli_query($conn, "delete from office_enq where Oid='$id'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='all-admission.enquiry.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='all-admission.enquiry.php'</script>";
	}
	


?>