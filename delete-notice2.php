<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

$id=$_GET['notice2id'];
	
	$sql=mysqli_query($conn, "delete from notice2 where nid2='$id'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='manage_notice2.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location=''</script>";
	}
	


?>