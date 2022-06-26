<!-- header -->
<?php
define('title', ' Add Doctor-Welcome to the HealthLab');
define('page', 'add_doctor');
session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["admin_mail"])){
header("location:login.php");
}
else{
    $admin_mail=$_SESSION["admin_mail"];
}

if(isset($_POST["add_doc"])){
    $doc_name = mysqli_real_escape_string($conn, trim($_POST["doc_name"]));
    $doc_email = mysqli_real_escape_string($conn, trim($_POST["doc_email"]));
    $doc_details = mysqli_real_escape_string($conn, trim($_POST["doc_details"]));
    
    $password = mysqli_real_escape_string($conn, $_POST["pass"]);
	$cpassword = mysqli_real_escape_string($conn, $_POST["con_pass"]);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $doc_pic = $_FILES['doc_pic']['name'];
	$doc_img_temp = $_FILES['doc_pic']['tmp_name'];
	$img_folder = '../images/doctorimage/' . $doc_pic;
	move_uploaded_file($doc_img_temp, $img_folder);


    $email_sql = "select * from add_doctor where doc_email= '$doc_email' ";
	$query = mysqli_query($conn, $email_sql);
	$mail_count = mysqli_num_rows($query);
	if ($mail_count > 0) {
		$msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Email Already Exist</div>";

	}else{
        if($password === $cpassword){
            $sql="INSERT INTO add_doctor(doc_name, doc_email, doc_details, doc_pic,pass,con_pass) VALUES ('$doc_name ',' $doc_email',' $doc_details','$img_folder','$pass','$cpass')";
            $query=mysqli_query($conn,$sql);
            if($query){
                $msg = "<div class='alert alert-success p-2 ml-3 my-3'>  Doctor $doc_name Added Successfully</div>";
            }
            else{
                $msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Not Added Doctor . Try Again </div>";
            }
        }
        else {
            $msg = "<div class='alert alert-warning p-2 ml-3 my-3 col-sm-10'>Password Not Matched</div>";

        }
    }
 }

?>
<div class="col-lg-9">
<h2 class="text-center bg-primary text-white p-2">Add Doctor</h2>
   
   <div class="col-lg-6 ml-5">
        <form action="" method="POST" class="p-5" style="box-shadow: 0px 7px 5px #888888;" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Doctor Name</label>
                <input type="text" class="form-control" name="doc_name" id="" placeholder="Doctor Name" required>
            </div>
            <div class="form-group">
                <label for="">Doctor Email</label>
                <input type="text" class="form-control" name="doc_email" id="" placeholder="Doctor Email" required>
            </div>
            
            <div class="form-group">
                <label for="">Doctor Details</label> <br>
                <textarea name="doc_details" id="" class="form-control" rows="2"></textarea>
            </div>
           
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="pass" id="" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="con_pass" id="" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <label for="">Doctor Picture</label>
                <input type="file" class="form-control" name="doc_pic" id="" required>
            </div>
        <input type="submit" value="Add Doctor" class="btn btn-primary btn-block" name="add_doc" >
        <?php if(isset($msg)){echo $msg; } ?>
        </form>
   </div> 


</div>

</div>









<!-- footer -->
<?php
include "include/footer.php";
?>