<?php include('conection.php');

if(isset($_POST["student"]))
{
	
$sql="INSERT INTO studentdetails (studid,studfname,studlname,fathername,gender,address,contactno,courseid,semester,dob,email,password)
VALUES
('$_POST[studid]','$_POST[studfname]','$_POST[studlname]','$_POST[fathername]','$_POST[gender]','$_POST[address]','$_POST[contactno]','$_POST[courseid]','$_POST[semester]','$_POST[dob]','$_POST[email]','$_POST[pass]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysql_error());
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
			<h1>Signup for Students</h1>
				<form class="login100-form validate-form" method="post" action="">
					

					<div class="wrap-input100 validate-input m-t-50 m-b-35" data-validate = "studid">
						<input class="input100" type="text" name="studid">
						<span class="focus-input100" data-placeholder="Student ID"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-10 m-b-35" data-validate = "studfname">
						<input class="input100" type="text" name="studfname">
						<span class="focus-input100" data-placeholder="First Name"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-10 m-b-35" data-validate = "studlname">
						<input class="input100" type="text" name="studlname">
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-10 m-b-35" data-validate = "fathername">
						<input class="input100" type="text" name="fathername">
						<span class="focus-input100" data-placeholder="Father Name"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-10 m-b-35" data-validate = "gender">
						<input class="input100" type="text" name="gender">
						<span class="focus-input100" data-placeholder="Gender"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-10 m-b-35" data-validate = "address">
						<input class="input100" type="text" name="address">
						<span class="focus-input100" data-placeholder="Address"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-10 m-b-35" data-validate = "contactno">
						<input class="input100" type="text" name="contactno">
						<span class="focus-input100" data-placeholder="Contact no"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-10 m-b-35" data-validate = "courseid">
						<input class="input100" type="text" name="courseid">
						<span class="focus-input100" data-placeholder="Cource ID"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-10 m-b-35" data-validate = "semester">
						<input class="input100" type="text" name="semester">
						<span class="focus-input100" data-placeholder="Semester"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-10 m-b-35" data-validate = "dob">
						<input class="input100" type="text" name="dob">
						<span class="focus-input100" data-placeholder="Date Of Birth(D/M/Y)"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-10 m-b-35" data-validate = "email">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					

					<div class="wrap-input100 validate-input m-b-30" data-validate="password">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button name="student" class="login100-form-btn">
							Signup
						</button>
					</div>

					<ul class="login-more p-t-190">
						
						
							</a><br>
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