<?php 

include 'db.php';
$id=$_GET['vvid'];

	
	$sql=mysqli_query($conn, "delete from transport where vid='$id'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='all-transport.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='all-transport.php'</script>";
	}
	


?>