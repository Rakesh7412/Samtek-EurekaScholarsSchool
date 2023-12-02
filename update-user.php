<?php
error_reporting(null);
session_start();
include 'db.php';
$id=$_GET['userid'];
if( isset($_POST['register'])  ) {
       
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    $address=$_POST['address'];
	$cat=$_POST['cat'];
	$id=$_POST['uid'];
   
    $sql = mysqli_query($conn,"update userslogin set name='$name',email='$email',password='$password',address='$address',cat='$$cat', where uid='$id'") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('student details updated successfully!!..');</script>";
					  echo "<script>document.location='user.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error while updating student details!!..');</script>";
					  echo "<script>document.location='user.php'</script>";
	} 
	
}
?>