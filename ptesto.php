<?php
include 'db1.php';

if(isset($_POST['submit']))
{
$checked_array=$_POST['atid'];
foreach ($_POST['StudentName'] as $key => $value) 
{
	if(in_array($_POST['StudentName'][$key], $checked_array))
	{
	$StudentName=$_POST['StudentName'][$key];
	$ClassName= $_POST['ClassName'][$key];
	$presence= $_POST['presence'][$key];
	$datea= $_POST['datea'][$key];


	$sql = mysqli_query($conn,"INSERT INTO attendance(StudentName,ClassName,presence,datea)VALUES ('$StudentName','$ClassName','$presence','$datea')") or die(mysqli_error($conn));
	}
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Notice-2 added successfully!!..');</script>";
					  echo "<script>document.location='ptesto.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error while adding details!!..');</script>";
					  echo "<script>document.location='manage_notice2.php'</script>";
	} 
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Multiple Checkbox</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h4>Multiple Checkbox</h4>
<hr>
<form method="post" action="ptests.php">
<table class="table table-bordered">
	<thead>
		<tr>
			<th></th>
			<th>StudentName</th>
			<th>Class</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
  
    <tr>
    
			<td><input type="checkbox" name="atid[]" value="Car"></td>
			<td>Car
				<input type="hidden" name="StudentName[]" value="Car">
			</td>
			<td></td>
			<td><input type="number" name="ClassName[]" class="form-control"></td>
			<td><input type="number" name="presence[]" class="form-control"></td>
			<td><input type="number" name="datea" class="form-control"></td>
		</tr>
  
		<!-- <tr>
			<td><input type="checkbox" name="prodid[]" value="Bike"></td>
			<td>Bike
				<input type="hidden" name="prodname[]" value="Bike">
			</td>
			<td><input type="number" name="prod_price[]" class="form-control"></td>
			<td><input type="number" name="prod_qty[]" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Accessories"></td>
			<td>Accessories
				<input type="hidden" name="prodname[]" value="Accessories">
			</td>
			<td><input type="number" name="prod_price[]" class="form-control"></td>
			<td><input type="number" name="prod_qty[]" class="form-control"></td>
		</tr> -->
	</tbody>
</table>
<div class="text-center">
	<input type="submit" name="submit" class="btn btn-success" value="Submit">
	</div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>