<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login Page</title>
		<!-- bootstrap css -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- fontawesome css -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">

	</head>
	<?php
session_start();
include "../db_connection.php";

	if (isset($_POST["submit"])) {
		$mail = mysqli_real_escape_string($conn, trim($_POST["mail"]));
		$password = mysqli_real_escape_string($conn, trim($_POST["pass"]));
		$email_sql = "select * from pat_regestration where pat_email= '$mail' and status='active' ";
		$query = mysqli_query($conn, $email_sql);
		$mail_count = mysqli_num_rows($query);
		if ($mail_count > 0) {
			$email_pass = mysqli_fetch_assoc($query);
			$dbpass = $email_pass["pat_pass"];
			$pass_decode = password_verify($password, $dbpass);
			if ($pass_decode) {
				$_SESSION["pat_email"] = $mail;
				header("location:profile.php");

			} else {
				$msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Password not matched</div>";
			}
		} else {
			$msg = "<div class='text-white text-center bg-danger p-2 ml-3 my-3'>Not register this account</div>";

		}
	}


?>
	<body style="background-color: lightgrey;">

		<section class="container-fluid ">


			<div class=" row justify-content-center">
				<div class="col-lg-4 col-md-10 col-sm-11 col-11 ">
					<form class=" p-5 bg-light my-5" style="box-shadow: 0px 7px 5px #888888; border-radius: 10px;" method="POST">

						<h2 class="text-center mb-3">
							<i class="fas fa-stethoscope text-primary"></i>
							Login
						</h2>
						<div class="form-group">
							<i class="fas fa-envelope mr-2 text-primary"></i><label for="email">Email address:</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email" name="mail" required>
							
						</div>
						<div class="form-group">
							<i class="fas fa-key mr-2 text-primary"></i><label for="pwd">Password:</label>
							<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pass" required>
						</div>
						

						<div class=" my-3 ">
							<button type="submit" class="btn btn-primary mr-3" name="submit">Login</button>
							<a href="../index.php" class="btn btn-outline-secondary">Back to Home</a>
						</div>
						<small>Forgot Password? <a href="forgot_via_mail.php">Dont worry click here </a></small><br>
						
					 <?php if (isset($msg)) {echo $msg;}?>
					 <?php if (isset($_SESSION["msg"])) {echo $_SESSION["msg"];}?>
					 <small>Not Have an account? <a href="regs.php">SignUp</a></small>
					</form>

				</div>

			</div>
		</section>
		<!-- first add jquery then fontawesome then popper and lastly bootstrap -->
			
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
			<script src="../js/all.min.js"></script>
			
	</body>
</html>