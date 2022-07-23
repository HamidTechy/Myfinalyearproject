<?php include('conection.php');

if(isset($_POST["parents"]))
{
	$pwde = md5($_POST['pass']);
$sql="INSERT INTO parents (p_name, std_id,email, pass, contect)
VALUES
('$_POST[p_name]','$_POST[std_id]','$_POST[email]','$pwde','$_POST[contect]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  else
  {
	  echo "1 record Inserted Successfully...";
	  header("Location: index.php");
  }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Parents Signup </title>
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
			<h1>Parents Signup</h1>
				<form class="login100-form validate-form" method="post" action="">
					

					<div class="wrap-input100 validate-input m-t-50 m-b-35" data-validate = "Parent name">
						<input class="input100" type="text" name="p_name">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>
					<div class="wrap-input100 validate-input m-t-50 m-b-35" data-validate = "Student id">
						<input class="input100" type="int" name="std_id">
						<span class="focus-input100" data-placeholder="Student id"></span>
					</div>
					<div class="wrap-input100 validate-input m-t-50 m-b-35" data-validate = "Email">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="text" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-50" data-validate="Contect">
						<input class="input100" type="text" name="contect">
						<span class="focus-input100" data-placeholder="contect"></span>
					</div>
					
				

					<div class="container-login100-form-btn">
						<button name="parents" class="login100-form-btn">
							Signup
						</button>
					</div>

					<ul class="login-more p-t-190">
						
						<li>
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