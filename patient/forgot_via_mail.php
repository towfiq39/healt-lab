<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Forgot Password</title>
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
	$mail = mysqli_real_escape_string($conn, trim($_POST["mail"]));
	$email_sql = "select * from pat_regestration where pat_email= '$mail' ";
	$query = mysqli_query($conn, $email_sql);
	$mail_count = mysqli_num_rows($query);
	if ($mail_count > 0) {
		$row = mysqli_fetch_assoc($query);

		$token = $row["token"];
		$to = $mail;
		$subject = "Password Reset";
		$txt = "Click here to reset your password http://localhost/health-lab/patient/resetpass.php?token=$token";
		$headers = "From: imrosetowfik@gmail.com";

		if (mail($to, $subject, $txt, $headers)) {
			$_SESSION["msg"] = "<div class='alert alert-success p-2 ml-3 my-3 col-12'>Check Your Mail to Reset Your Password $mail</div>";
			header("location:login.php");
		}

	}
}
?>

	<section class="container-fluid">


			<h2 class="text-center mt-5">
			<i class="fas fa-stethoscope text-primary"></i>
			Forgot Password
			</h2>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-10 col-sm-11 col-11">
					<form class="p-5 " method="POST" style="box-shadow: 0px 7px 5px #888888;">
						<?php if (isset($_SESSION["msg"])) {echo $_SESSION["msg"];}?>
						<div class="form-group">
							<i class="fas fa-envelope mr-2 text-primary"></i><label for="email">Email address:</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email"  name="mail" required>

						</div>


						<div class="my-3">
							<button type="submit" class="btn btn-primary mr-3" name="submit">Send Mail</button>

						</div>

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