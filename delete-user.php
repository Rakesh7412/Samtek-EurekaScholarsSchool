<?php 

include 'db.php';

$id=$_GET['userid'];


	$sql=mysqli_query($conn, "delete from userslogin where uid='$id'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='user.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='user.php'</script>";
	}
	
 
?>