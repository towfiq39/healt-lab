<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Reset Password </title>
		<!-- bootstrap css -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- fontawesome css -->
		<link rel="stylesheet" href="../css/all.min.css">
		<!-- webpage styling css -->
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<?php
session_start();
include "../db_connection.php";

if (isset($_POST["submit"])) {
	if (isset($_GET["token"])) {
		$token = $_GET["token"];
	}
	$password = mysqli_real_escape_string($conn, trim($_POST["pass"]));
	$con_password = mysqli_real_escape_string($conn, trim($_POST["cpass"]));

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($con_password, PASSWORD_BCRYPT);
	if ($password === $con_password) {

		$email_sql = "update pat_regestration set pat_pass='$pass' , pat_con_pass='$cpass' where token= '$token'";
		$query = mysqli_query($conn, $email_sql);

		if ($query) {

			$_SESSION["msg"] = "<div class='alert alert-success p-2 ml-3 my-3'>Updated Password </div>";
			header("location:login.php");

		} else {
			$msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Password not Updated</div>";

		}
	} else {
		$msg = "<div class='bg-success text-white p-2 ml-3 my-3'> Password  Not Matched</div>";

	}
}
?>
		<section class="container-fluid">


			<h2 class="text-center mt-5">
				<i class="fas fa-stethoscope text-primary"></i>
				Reset Password
			</h2>
			<div class=" row justify-content-center">
				<div class="col-lg-4 col-md-10 col-sm-11 col-11">
					<form class=" p-5 " style="box-shadow: 0px 7px 5px #888888;" method="POST">

						<div class="form-group">
							<i class="fas fa-key mr-2 text-primary"></i><label for="pwd">Password:</label>
							<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pass" required>
						</div>
						<div class="form-group">
							<i class="fas fa-key mr-2 text-primary"></i><label for="pwd">Confirm Password:</label>
							<input type="password" class="form-control" placeholder="Confirm password" id="pwd2" name="cpass" required>
						</div>

						<div class=" my-3 ">
							<button type="submit" class="btn btn-primary mr-3" name="submit">Update Password </button>

						</div>
					 <?php if (isset($msg)) {echo $msg;}?>

					</form>

				</div>

			</div>
		</section>
		<!-- first add jquery then fontawesome then popper and lastly bootstrap -->
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/all.min.js"></script>
		<script type="text/javascript" src="../js/popper.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	</body>
</html>