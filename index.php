<?php

session_start();
include 'db.php';


if( isset($_POST['submit'])  ) {
  header("Location:schoollogin.php");

	
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Eureka Scoolar's School</title>
  <link rel="stylesheet" href="login/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="img\icon.png">
</head>
<body>

<!-- partial:index.partial.html -->
<div class="container">
  <div class="bg">
    <img />
    <div class="bg-overlay">
    </div>
    
  </div>

  <fieldset class="sign-in-form">
    
      <h3 style="color:#C82128;font-size:2vw;font-weight: bold">School Login</h3>
     
      <form>

        <!-- <input type="text" placeholder="E-mail" name="uname" required> -->

        <!-- <input type="password" placeholder="Password" name="psw" required> -->
        <center>
        <a href="schoollogin.php">
                    <button  type="button">Enter</button></a>
                    </center>
        <div class="container">

        <!-- <span class="psw">Forgot <a href="#" id="resetpw">password?</a></span> -->

      </form>

  </fieldset><br>
  <div>'       ''  ''  ''    ''   '<br></div>
  <fieldset class="sign-in-form">
    <h3 style="color:#C82128;font-size:2vw;font-weight: bold">Parents Login</h3>

    <form>

      <!-- <input type="text" placeholder="E-mail" name="uname" required> -->

      <!-- <input type="password" placeholder="Password" name="psw" required> -->

      <center>
        <a href="parentlogin.php">
                    <button  type="button">Enter</button></a>
                    </center>

      <div class="container">

      <!-- <span class="psw">Forgot <a href="#" id="resetpw">password?</a></span> -->

    </form>

</fieldset> 
<br>
  <div>'       ''  ''  ''    ''   '<br></div>
<fieldset class="sign-in-form">
  <h3 style="color:#C82128;color:#C82128;font-size:2vw;font-weight: bold">Student Login</h3>

  <form>

    <!-- <input type="text" placeholder="E-mail" name="uname" required> -->

    <!-- <input type="password" placeholder="Password" name="psw" required> -->

    <center>
        <a href="studentlog.php">
                    <button  type="button">Enter</button></a>
                    </center>


    <div class="container">

    <!-- <span class="psw">Forgot <a href="#" id="resetpw">password?</a></span> -->

  </form>

</fieldset>

</div>
<div class="container">
  <div class="bg">
    <img />
    <div class="bg-overlay">
    </div>
  </div>

  <fieldset class="sign-in-form">
      <h3 style="color:#C82128;font-size:2vw;font-weight: bold">Gate Pass Login</h3>

      <form>

        <!-- <input type="text" placeholder="E-mail" name="uname" required> -->

        <!-- <input type="password" placeholder="Password" name="psw" required> -->

        <center>
        <a href="gatelog.php">
                    <button  type="button">Enter</button></a>
                    </center>


        <div class="container">

        <!-- <span class="psw">Forgot <a href="#" id="resetpw">password?</a></span> -->

      </form>

  </fieldset><br>
  <div>'       ''  ''  ''    ''   '<br></div>
  
<br>
  <div>'       ''  ''  ''    ''   '<br></div>
<fieldset class="sign-in-form">
  <h3 style="color:#C82128;color:#C82128;font-size:2vw;font-weight: bold">CRM Login</h3>

  <form>

    <!-- <input type="text" placeholder="E-mail" name="uname" required> -->

    <!-- <input type="password" placeholder="Password" name="psw" required> -->

    <center>
        <a href="crmlog.php">
                    <button  type="button">Enter</button></a>
                    </center>


    <div class="container">

    <!-- <span class="psw">Forgot <a href="#" id="resetpw">password?</a></span> -->

  </form>

</fieldset>

</div>
<!-- partial -->
  
</body>
</html>
