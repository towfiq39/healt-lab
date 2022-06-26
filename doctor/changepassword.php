<!-- header -->
<?php
define('title', ' ChangePassword-Welcome to the HealthLab');
define('page', 'chngpass');
session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["doc_mail"])){
header("location:login.php");
}
else{
    $doc_mail=$_SESSION["doc_mail"];
}

if (isset($_POST["submit"])) {
	$mail = mysqli_real_escape_string($conn, trim($_POST["mail"]));
	$password = mysqli_real_escape_string($conn, trim($_POST["pass"]));
	$con_password = mysqli_real_escape_string($conn, trim($_POST["con_pass"]));

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($con_password, PASSWORD_BCRYPT);
	if ($password === $con_password) {

		$email_sql = "update add_doctor set pass='$pass', con_pass='$cpass' where doc_email= '$mail'";
		$query = mysqli_query($conn, $email_sql);

		if ($query) {

			$msg = "<div class='alert alert-success p-2 ml-3 my-3'>Updated Password </div>";

		} else {
			$msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Password not Updated</div>";

		}
	} else {
		$msg = "<div class='alert alert-warning p-2 ml-3 my-3'> Password  Not Matched</div>";

	}
}
?>


<div class="col-lg-9 col-md-12 col-sm-12 col-12 my-3">
	<section class="container-fluid">
		<div class="row">

			<div class="col-lg-6 col-md-10 col-sm-12 col-12 offset-lg-2">

				<h2>
				<i class="fas fa-stethoscope text-primary"></i>
				Update Password
				</h2>
				<form class="p-5 " method="POST" style="box-shadow: 0px 7px 5px #888888;">

					<div class="form-group">
						<i class="fas fa-envelope mr-2 text-primary"></i><label for="email">Email address:</label>
						<input type="email" class="form-control" placeholder="Enter email" id="email" value="<?php if (isset($_SESSION["doc_mail"])) {echo $_SESSION["doc_mail"];}?>"  name="mail" readonly>

					</div>
					<div class="form-group">
						<i class="fas fa-key mr-2 text-primary"></i><label for="pwd">Password:</label>
						<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pass" required>
					</div>
					<div class="form-group">
						<i class="fas fa-key mr-2 text-primary"></i><label for="pwd">Confirm Password:</label>
						<input type="password" class="form-control" placeholder="Confirm password" id="cpwd" name="con_pass" required>
					</div>

					<div class="my-3">
						<button type="submit" class="btn btn-primary mr-3" name="submit">Update Password</button>

					</div>
					<?php if (isset($msg)) {echo $msg;}?>


				</form>
			</div>
		</div>
	</section>
</div>


<!-- footer -->
<?php
include "include/footer.php";
?>