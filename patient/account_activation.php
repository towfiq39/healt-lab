<?php
ob_start();
session_start();
include "../db_connection.php";
if (isset($_GET["token"])) {
	$token = $_GET["token"];

	$sql = "update pat_regestration set status='active' where token='$token' ";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		if (isset($_SESSION["msg"])) {
			$_SESSION["msg"] = "<div class='alert alert-success p-2 ml-3 my-3 col-12'>Account Updated Successfully</div>";
			header("location:login.php");
		} else {
			$_SESSION["msg"] = "<div class='alert alert-success p-2 ml-3 my-3 col-12'>You Are Logged Out</div>";
			header("location:login.php");
		}
	} else {
		$_SESSION["msg"] = "<div class='alert alert-success p-2 ml-3 my-3 col-12'>Account Not Updated</div>";
		header("location:regs.php");
	}
}
?>