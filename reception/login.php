<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>reception-Login Page</title>
		<!-- bootstrap css -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- fontawesome css -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">
	</head>
	<body style="background-color: lightgrey;">
	<?php
session_start();
include "../db_connection.php";




if (isset($_POST["submit"])) {
	$mail = mysqli_real_escape_string($conn, $_POST["mail"]);
	$password = mysqli_real_escape_string($conn, $_POST["pass"]);
	$email_sql = "select * from admin_login where email= '$mail' and password ='$password'  ";
	$query = mysqli_query($conn, $email_sql);
	$mail_count = mysqli_num_rows($query);
	if ($mail_count == 1) {

		$_SESSION["admin_mail"] = $mail;
		header("location:viewappoinment.php");
	} else {
		$msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Please enter valid email and password </div>";

	}

}
?>

		<section class="container-fluid ">
			<div class=" row justify-content-center">
				<div class="col-lg-4 col-md-10 col-sm-11 col-11 ">
					<form class=" p-5 bg-light my-5" style="box-shadow: 0px 7px 5px #888888; border-radius: 10px;" method="POST">
						<h2 class="text-center mb-3">
						<i class="fas fa-stethoscope text-primary"></i>
						Receptionist Login
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
						<?php if (isset($msg)) {echo $msg;}?>
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