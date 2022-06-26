<!-- header -->
<?php
define('title', ' Add Patient-Welcome to the HealthLab');
define('page', 'patient');
session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["admin_mail"])){
header("location:login.php");
}
else{
    $admin_mail=$_SESSION["admin_mail"];
}

if (isset($_POST["submit"])) {
	$mail = mysqli_real_escape_string($conn, $_POST["mail"]);
	$password = mysqli_real_escape_string($conn, $_POST["pass"]);
	$cpassword = mysqli_real_escape_string($conn, $_POST["cpass"]);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	// $token = bin2hex(random_bytes(15));

	$email_sql = "select * from pat_regestration where pat_email= '$mail' ";
	$query = mysqli_query($conn, $email_sql);
	$mail_count = mysqli_num_rows($query);
	if ($mail_count > 0) {
		$msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Email Already Exist</div>";

	} else {
		if ($password === $cpassword) {
			$sql = "insert into pat_regestration (pat_email,pat_pass,pat_con_pass) values ('$mail','$pass','$cpass') ";
			$query = mysqli_query($conn, $sql);
			if ($query) {
				$msg = "<div class='alert alert-success p-2 ml-3 my-3 col-sm-10'>Successfully Regestered</div>";
				// $_SESSION["login_email"] = $mail;
				//  header("location:login.php");

				// $to = $mail;
				// $subject = "Account Activation";
				// $txt = "Click here to activate your account http://localhost/ischool/user/account_activation.php?token=$token";
				// $headers = "From: imrosetowfik@gmail.com";

				// if (mail($to, $subject, $txt, $headers)) {
				// 	$_SESSION["msg"] = "<div class='alert alert-success p-2 ml-3 my-3 col-12'>Check Your Mail to Activate Your Account $mail</div>";
				// 	header("location:login.php");
				// } else {

				// }

			} else {
				$msg = "<div class='alert alert-warning p-2 ml-3 my-3 col-sm-10'>Not Regestered</div>";

			}
		} else {
			$msg = "<div class='alert alert-warning p-2 ml-3 my-3 col-sm-10'>Password are not matching</div>";

		}
	}
}


?>
<div class="col-lg-9">
    <h2 class="text-center bg-success text-white p-2">Add Patient</h2>
    <div class="col-lg-2"></div>
    <div class="col-lg-6 col-md-10 col-sm-11 col-11 offset-lg-2">
        <form class=" p-5 bg-light" style="box-shadow: 0px 7px 5px #888888; border-radius: 10px;" method="POST">
            <h2 class="text-center mb-3">
            <i class="fas fa-stethoscope text-primary"></i>
            Create Patient Account
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
            <?php if (isset($msg)) {echo $msg;}?>
            <!-- <small>Have an account? <a href="login.php">Login</a></small> -->
        </form>
    </div>
</div>


</div>









<!-- footer -->
<?php
include "include/footer.php";
?>