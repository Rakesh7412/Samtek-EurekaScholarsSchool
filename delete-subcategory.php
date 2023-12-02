<?php 
session_start();
$uid=$_SESSION["uid"];
$name=$_SESSION["namez"];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

$subid=$_GET['subcategoryid'];
	
	$sql=mysqli_query($conn, "delete from subcategory where subid='$subid'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='all-subcategory.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='all-subcategory.php'</script>";
	}
	


?>