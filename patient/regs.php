<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Regestration Page</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- fontawesome css -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">
</head>

<?php
session_start();
include "../db_connection.php";
if (isset($_POST["submit"])) {
	$mail = mysqli_real_escape_string($conn, $_POST["mail"]);
	$password = mysqli_real_escape_string($conn, $_POST["pass"]);
	$cpassword = mysqli_real_escape_string($conn, $_POST["cpass"]);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	 $token = bin2hex(random_bytes(15));

	$email_sql = "select * from pat_regestration where pat_email= '$mail' ";
	$query = mysqli_query($conn, $email_sql);
	$mail_count = mysqli_num_rows($query);
	if ($mail_count > 0) {
		$msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Email Already Exist</div>";
	} else {
		if ($password === $cpassword) {
			$sql = "insert into pat_regestration (pat_email,status,pat_pass,pat_con_pass,token) values ('$mail','inactive','$pass','$cpass','$token') ";
			$query = mysqli_query($conn, $sql);
			if ($query) {
				$msg = "<div class='alert alert-success p-2 ml-3 my-3 col-sm-10'>Successfully Regestered</div>";
				// $_SESSION["login_email"] = $mail;
				header("location:login.php");

				$to = $mail;
				$subject = "Account Activation";
				$txt = "Click here to activate your account http://localhost/health-lab/patient/account_activation.php?token=$token";
				$headers = "From: imrosetowfik@gmail.com";

				if (mail($to, $subject, $txt, $headers)) {
					$_SESSION["msg"] = "<div class='alert alert-success p-2 ml-3 my-3 col-12'>Check Your Mail to Activate Your Account $mail</div>";
					header("location:login.php");
				} else {

				}

			} else {
				$msg = "<div class='alert alert-warning p-2 ml-3 my-3 col-sm-10'>Not Regestered</div>";
			}
		} else {
			$msg = "<div class='alert alert-warning p-2 ml-3 my-3 col-sm-10'>Password are not matching</div>";
		}
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
						Create Account
					</h2>
					<div class="form-group">
						<i class="fas fa-envelope mr-2 text-primary"></i><label for="email">Email address:</label>
						<input type="email" class="form-control" placeholder="Enter email" id="email" name="mail" required>
						<small class="form-text">We'll never share your email</small>
					</div>
					<div class="form-group">
						<i class="fas fa-key mr-2 text-primary"></i><label for="pwd">Password:</label>
						<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pass" required>
					</div>
					<div class="form-group">
						<i class="fas fa-key mr-2 text-primary"></i><label for="pwd">Confirm Password:</label>
						<input type="password" class="form-control" placeholder="Confirm password" id="pwd2" name="cpass" required>
					</div>
					<div class=" my-3 ">
						<button type="submit" class="btn btn-primary mr-3" name="submit">Signup</button>
						<a href="../index.php" class="btn btn-outline-secondary">Back to Home</a>
					</div>
					<?php if (isset($msg)) {
						echo $msg;
					} ?>
					<small>Have an account? <a href="login.php">Login</a></small>
				</form>
			</div>
		</div>
	</section>
	<!-- first add jquery then fontawesome then popper and lastly bootstrap -->
	<?php 

	?>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/all.min.js"></script>

</body>

</html>