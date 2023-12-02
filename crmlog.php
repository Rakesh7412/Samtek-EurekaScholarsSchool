<?php
session_start();
include 'db.php';

if( isset($_POST['login'])  ) {
       
 if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }
        $email=$_POST['email'];
        $password=$_POST['password'];
		
        $ret=mysqli_query( $conn, "SELECT * FROM userslogin WHERE email='$email' and Password='$password' and cat='crm'") or die("Could not execute query: " .mysqli_error($conn));

        $row = mysqli_fetch_array($ret);
		$uid=$row['uid'];
		$name=$row['name'];
        
        if(!$row) {
           
           echo '<script type="text/javascript">';
           echo 'alert("The email or password you entered is incorrect.")';
           echo "<script>document.location='crmlog.php'</script>";
        }
        else {
        	
            $_SESSION["uid"] = "$uid";
            $_SESSION["namez"] = "$name";
            
            echo '<script type="text/javascript">';
            echo 'alert("succesfully loged in")'; 
            header("Location:index1.php");
            echo '</script>';
        		# code...
        	}
        
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login/style-l.css">
    <title>Eureka Scholar's School</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
</head>
<body>
  
  <center>
  <h1 style="color:#C82128;">Welcome CRM ESS</h1></center>
<div class="login-box">
  <h2>CRM Login</h2>
  <form action="" method="post">
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <button class="btn login-form__btn submit w-100" type="submit" name="login">
      <span></span>
      <span></span>
      <span></span>
      <span ></span>
    Submit
     
      </button>
      <!-- <p> <b>Don't have an account??<a href="teacher_register.php"> Registor now</a></b></p> -->
  </form>
  
</div> 



</body>

</html>