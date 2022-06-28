<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Confirm-Appoinment</title>
		<!-- bootstrap css -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- fontawesome css -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">
	</head>
<body>
<?php
session_start();
 include('../db_connection.php');
 if(isset($_POST["view"])){
     $appoinment_id=$_POST["appo_id"];

     $sql="select * from book_appoinment where appointment_id='$appoinment_id'";
     $query=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($query);
 }

if(isset($_POST["update_appo"])){
    $appo_id = mysqli_real_escape_string($conn, trim($_POST["appo_id"]));
    $name = mysqli_real_escape_string($conn, trim($_POST["name"]));
    $email = mysqli_real_escape_string($conn, trim($_POST["email"]));
    $mobile = mysqli_real_escape_string($conn, trim($_POST["mobile"]));
    $gender = mysqli_real_escape_string($conn, trim($_POST["gender"]));
    $date = mysqli_real_escape_string($conn, trim($_POST["date"]));
    $time = mysqli_real_escape_string($conn, trim($_POST["time"]));
    $department = mysqli_real_escape_string($conn, trim($_POST["department"]));
    $doctor = mysqli_real_escape_string($conn, trim($_POST["doctor"]));
    $confirmation = mysqli_real_escape_string($conn, trim($_POST["status"]));

    $sql="UPDATE book_appoinment SET pat_name='$name', pat_email='$email', pat_number='$mobile', pat_gender='$gender', appoinment_date='$date', appoinment_time='$time', dept='$department', doc_name='$doctor',confirmation='$confirmation' where appointment_id='$appo_id'";
    $query=mysqli_query($conn,$sql);
    if($query){
        $msg = "<div class='alert alert-success p-2 ml-3 my-3'>Confirmed Appoinment</div>";
       header("location:viewappoinment.php");
    }
    else{
        $msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Not Confirmed.  </div>";
    }
}

?>
    <div id="appointment" class="container-fluid">
        <div class="row ">
            <div class="col-lg-8 col-md-8 mx-auto">
                <div class="well-block">
                    <div class="well-title">
                        <h2 class="text-center text-success  p-3">Confirm Appoinment</h2>
                    </div>
                    <form method="POST">
                        <!-- Form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    
                                    <input id="appo_id" value="<?php echo  $appoinment_id ?>" name="appo_id" type="hidden" placeholder="Name" class="form-control input-md" required >
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="name">Name</label>
                                    <input id="name" value="<?php echo $row["pat_name"] ?>" name="name" type="text" placeholder="Name" class="form-control input-md" required >
                                </div>

                            </div>
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email"  value="<?php echo $row["pat_email"] ?>" name="email" type="email" placeholder="E-Mail" class="form-control input-md" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="mobile">Mobile</label>
                                    <input id="number"  value="<?php echo $row["pat_number"] ?>" name="mobile" type="number" placeholder="Mobile No" class="form-control input-md" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="Gender">Patient Gender</label><br>
                                    Male <input value="Male"  name="gender" type="radio" class="p-3 d-inline input-md" > <br>
                                    Female <input value="Female" name="gender" type="radio" class="p-3 d-inline input-md" required>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="date">Preferred Date</label>
                                    <input id="date" value="<?php echo $row["appoinment_date"] ?>" name="date" type="date" placeholder="Preferred Date" class="form-control input-md" required>
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="time">Preferred Time</label>
                                    <select id="time" name="time" class="form-control">
                                    
                                        <option value="<?php echo $row["appoinment_time"] ?> "><?php echo $row["appoinment_time"] ?></option>
                                        <option value="3:00 PM to 6:00 PM ">3:00 PM to 6:00 PM </option>
                                        <option value="6:00 PM to 10:00 PM">6:00 PM to 10:00 PM </option>
                                    </select>
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="appointmentfor">Department</label>
                                    <select id="appointmentfor" name="department" class="form-control">
                                        <option value="<?php echo $row["dept"] ?> "><?php echo $row["dept"] ?></option>
                                        <option value="Gynacology">Gynacology</option>
                                        <option value="Dermatologist">Dermatologist</option>
                                        <option value="Orthology">Orthology</option>
                                        <option value="Anesthesiology">Anesthesiology</option>
                                        <option value="Ayurvedic">Ayurvedic</option>
                                    </select>
                                </div>
                            </div>
        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="doctor">Doctor</label>
                                    <select id="appointmentfor" name="doctor" class="form-control">
                                        <?php
                                        $sql="select * from add_doctor";
                                        $query=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($query)){
                                        ?>
                                            
                                            <option value="<?php echo $row["doc_name"] ?>"><?php echo $row["doc_name"] ?></option>
                                                                                            
                                        <?php
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-check mb-2">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input " name="status" id="" value="active" required>
                                Confirm Appoinment
                              </label>
                            </div>
                            <!-- Button -->
                            <div class="col-md-12 text-center">
                                
                                <input type="submit" class="btn p-2 btn-block btn-outline-success" name="update_appo" value="Confirm Appointment">
                                    
                            
                            </div>
                            <?php
                            if(isset($msg)){
                                echo $msg;
                            }
                            ?>
                        </div>
                    </form>
                    <!-- form end -->
                </div>
            </div>
        </div>
    </div>
	<!-- first add jquery then fontawesome then popper and lastly bootstrap -->

		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/all.min.js"></script>

</body>
</html>