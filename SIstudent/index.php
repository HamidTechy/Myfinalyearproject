<?php
include('conection.php');
session_start();
if(isset($_SESSION['std'])!="")
{
	header("Location: profile.php");
}
if(isset($_POST['login']))
  {
    
// Assigning POST values to variables.
$email = $_POST['Email'];
$password = $_POST['Password'];

$res=mysqli_query($con,"SELECT * FROM studentdetails WHERE email='$email'");
	$row=mysqli_fetch_array($res);

$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['password']== $password)
	{
		$_SESSION['std'] = $row['studid'];
		header("Location: profile.php");
}else{
	$query = "SELECT * FROM `parents` WHERE email='$email' and pass='$password'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row =mysqli_fetch_array($result);

if ($row['email']==$email && $row['pass']==$password){

header('location:home.php');


}else{

echo "Invalid Login Email or Password";
}
}
  } 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SI System </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
	
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
			<h1>SI System</h1>
				<form class="login100-form validate-form" method="post" action="">
					

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="Email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="Password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button name="login" class="login100-form-btn">
							Login
						</button>
					</div>

					<ul class="login-more p-t-190">
						
						<li>
							<span class="txt1">
								Don’t have an account?
							</span>
							<br>

							<a href="signup.php" class="txt2">
								Signup for Parents
							</a><br>
							
							<a href="stusignup.php" class="txt2">
								Signup for Students
							</a><br><br>
							
							
							<a href="admin/admin.php" class="txt2">
								Administrator Log in
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>