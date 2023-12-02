<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

$id=$_GET['stfgid'];
	
	$sql=mysqli_query($conn, "delete from staffgate where sid='$id'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='all-staffgate.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location=''</script>";
	}
	


?>