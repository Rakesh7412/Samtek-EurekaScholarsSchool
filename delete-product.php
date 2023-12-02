<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

$proid=$_GET['proid'];
	
	$sql=mysqli_query($conn, "delete from product where proid='$proid'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='all-product.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='all-product.php'</script>";
	}
	


?>