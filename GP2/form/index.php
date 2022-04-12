<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-150" method="POST" onsubmit="index.php">
					<span class="login100-form-title">
						GP2 ACTIVITY STATUS
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your EMAIL">
						<input class="input100" type="text" name="email" placeholder="EMAIL">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter GR NO">
						<input class="input100" type="password" name="grno"  length=8 placeholder="GR NO">
						<span class="focus-input100"></span>
					</div>




					<div class="text-right p-t-5 p-b-23">
						<!-- <span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a> -->
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn">
					</div>

					<div class="flex-col-c p-t-1000 p-b-40">
						<span class="txt1 p-b-9">

						</span>

					</div>
				</form>
			</div>
		</div>
	</div>


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

	<?php
	if (!empty($_POST)) {
		$grno = $_POST['grno'];
		$email = $_POST['email'];


		// $host       = "sql303.epizy.com";
		// $dbUsername = "epiz_29618754";
		// $dbPassword = "U6MBVDjNxUe";
		// $dbname     = "epiz_29618754_registration";

		include('../config.php');
		// $host       = "localhost";
		// $dbUsername = "root";
		// $dbPassword = "";
		// $dbname     = "swd";

		$fin_res = "";

		//Create conn
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		if (mysqli_connect_error()) 
		{
			die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
		} else 
		{
			$query = "select * from result where grno=" . $grno . " and email='" . $email . "'";
			$result = mysqli_query($conn, $query);
			if ($result) 
			{
				while ($row = mysqli_fetch_array($result)) {
					// echo $row['email'] . " " . $row['grno'] . " " . $row['activity_name'] . " " . $row['result'];
					$fin_res .= $row['email'] . " " . $row['grno'] . " " . $row['activity_name'] . " " . $row['result'];
				}
			} else 
			{
				// echo "grno: " . $grno . " email: " . $email . " :)";
				// echo "result is empty";
				// echo "<script>alert('Incorrect Credentials')</script>";
			}
			
			if(!empty($fin_res))
				echo "<script>alert('" . $fin_res . "')</script>";
			else{
				echo "<script>alert('Incorrect Credentials')</script>";
			}

		}
		
	}
	?>

</body>

</html>