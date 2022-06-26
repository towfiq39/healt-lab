<!-- header -->
<?php
define('title', ' Edit Doctor-Welcome to the HealthLab');

session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["admin_mail"])){
header("location:login.php");
}
else{
    $admin_mail=$_SESSION["admin_mail"];
}

if(isset($_POST["view"])){
   $doc_id=$_POST["doc_id"];
   $sql="select * from add_doctor where doc_id='  $doc_id'";
   $query=mysqli_query($conn, $sql);
   $row=mysqli_fetch_assoc($query);
  
}

if(isset($_POST["update_doc"])){
    $doctor_id = mysqli_real_escape_string($conn, trim($_POST["doc_id"]));
    $doc_name = mysqli_real_escape_string($conn, trim($_POST["doc_name"]));
    $doc_email = mysqli_real_escape_string($conn, trim($_POST["doc_email"]));
    $doc_details = mysqli_real_escape_string($conn, trim($_POST["doc_details"]));
   

    $doc_pic = $_FILES['doc_pic']['name'];
	$doc_img_temp = $_FILES['doc_pic']['tmp_name'];
	$img_folder = '../images/doctorimage/' . $doc_pic;
	move_uploaded_file($doc_img_temp, $img_folder);



    $sql="UPDATE add_doctor SET doc_name=' $doc_name',doc_email='$doc_email',doc_details=' $doc_details ',doc_pic='$img_folder' WHERE  doc_id='$doctor_id'";
    $query=mysqli_query($conn,$sql);
    if($query){
        $msg = "<div class='alert alert-success p-2 ml-3 my-3'>  Doctor $doc_name Updated Successfully</div>";
    }
    else{
        $msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Not Updated Doctor . Try Again </div>";
    }
}


?>
<div class="col-lg-9">
<h2 class="text-center bg-success text-white p-2">Add Doctor</h2>
   
   <div class="col-lg-8 ml-8">
        <form action="" method="POST" class="p-5" style="box-shadow: 0px 7px 5px #888888;" enctype="multipart/form-data">

            <div class="form-group">
				<label>Doctor ID</label>
				<input type="Number" class="form-control" name="doc_id" value="<?php if (isset($row["doc_id"])) {echo $row["doc_id"];}?>" readonly>
			</div>
            <div class="form-group">
                <label for="">Doctor Name</label>
                <input type="text" class="form-control" value="<?php if(isset($row["doc_name"])){echo $row["doc_name"]; } ?>" name="doc_name" id="" placeholder="Doctor Name" required>
            </div>
            <div class="form-group">
                <label for="">Doctor Email</label>
                <input type="text" class="form-control" value="<?php if(isset($row["doc_email"])){echo $row["doc_email"]; } ?>" name="doc_email" id="" placeholder="Doctor Email" required>
            </div>
            <div class="form-group">
                <label for="">Doctor Details</label> <br>
                <textarea name="doc_details" id="" class="form-control" rows="5"><?php if(isset($row["doc_details"])){echo $row["doc_details"]; } ?></textarea>
            </div>
            
            <img src="<?php if(isset($row["doc_pic"])){echo $row["doc_pic"]; } ?>" alt="" class="img-thumbnail">
            <div class="form-group">
                <label for="">Doctor Picture</label>
                <input type="file" class="form-control" value="<?php if(isset($row["doc_pic"])){echo $row["doc_pic"]; } ?>" name="doc_pic" id="" required>
            </div>

        <input type="submit" value="Add Doctor" class="btn btn-success btn-block" name="update_doc" >
        <?php if(isset($msg)){echo $msg; } ?>
        </form>
   </div> 


</div>

</div>









<!-- footer -->
<?php
include "include/footer.php";
?>