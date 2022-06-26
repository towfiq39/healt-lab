<!-- header -->
<?php
define('title', ' Query Reply-Welcome to the HealthLab');
define('page', 'query');
session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["admin_mail"])){
header("location:login.php");
}
else{
    $admin_mail=$_SESSION["admin_mail"];
}

if(isset($_GET["reply"])){
	$_SESSION["pat_id"]=$_GET["id"];
	
}


$sql="select * from query where pat_id={$_SESSION["pat_id"]}";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);




if(isset($_POST["submit_query_reply"])){
    $reply = mysqli_real_escape_string($conn, trim($_POST["reply"]));
    $sql="INSERT INTO query_reply(pat_id, query_reply) VALUES ('{$_SESSION["pat_id"]}','$reply')";
    $query=mysqli_query($conn,$sql);
    if($query){
        $msg = "<div class='alert alert-success p-2 ml-3 my-3'>Successfully Submitted</div>";
    } else {
        $msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Not Submit</div>";

    }
}
?>


<div class="col-lg-9">

	<div class="col-lg-6">
		<form action="" method="POST">
			<div class="form-group">
				<label for="">Question :</label>
				<input type="text" class="form-control" value="<?php echo $row["query"] ?>" name="query" readonly />
			</div>
			<div class="form-group">
				<label for="">Reply :</label>
				<textarea class="form-control" name="reply" id="" rows="3"></textarea>
			</div>
			<input type="submit" class="btn btn-outline-primary" name="submit_query_reply" value="Submit Answer"> 
			<?php if(isset($msg)){echo $msg;} ?>
		</form>
	</div>

</div>

<!-- footer -->
<?php
include "include/footer.php";
?>