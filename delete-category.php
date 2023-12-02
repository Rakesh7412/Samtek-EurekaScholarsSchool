<?php 
session_start();
$uid=$_SESSION["uid"];
$name=$_SESSION["namez"];

include 'db.php';

$cid=$_GET['id'];
	
	$sql=mysqli_query($conn, "delete from category where cid='$cid'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='all-category.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='manage_category.php'</script>";
	}
	


?>