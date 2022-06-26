<!-- header -->
<?php
define('title', ' Create Appoinment-Welcome to the HealthLab');
define('page', 'appoinment');
session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["pat_email"])){
    header("location:login.php");
}
else{
    $pat_email=$_SESSION["pat_email"];
}
?>
<div class="col-lg-9">
    <?php
    if(isset($_POST["appoinment"])){
        $name = mysqli_real_escape_string($conn, trim($_POST["name"]));
        $email = mysqli_real_escape_string($conn, trim($_POST["email"]));
        $mobile = mysqli_real_escape_string($conn, trim($_POST["mobile"]));
        $gender = mysqli_real_escape_string($conn, trim($_POST["gender"]));
        $date = mysqli_real_escape_string($conn, trim($_POST["date"]));
        $time = mysqli_real_escape_string($conn, trim($_POST["time"]));
        $department = mysqli_real_escape_string($conn, trim($_POST["department"]));
        $doctor = mysqli_real_escape_string($conn, trim($_POST["doctor"]));
        $sql="INSERT INTO book_appoinment(pat_name, pat_email, pat_number, pat_gender, appoinment_date, appoinment_time, dept, doc_name,confirmation) VALUES ('$name','$email','$mobile','$gender','$date','$time','$department','$doctor','inactive')";
        $query=mysqli_query($conn,$sql);
        if($query){
            "<div class='alert alert-success p-2 ml-3 my-3'>Booked Appoinment.Thank You $name </div>";
        }
        else{
            $msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Please Bokked Appoinment Again </div>";
        }
    }

    ?>
    
    
    <!-- Start Appointment -->
    <div id="appointment" class="appointment-main">
        <div class="container">

            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="well-block">

                        <form method="POST"  class=" p-5" style="box-shadow: 0px 7px 5px #888888; border-radius: 10px;">
                            <div class="well-title">
                                <h2>Book an Appointment</h2>
                            </div>
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required >
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" value="<?php if(isset($_SESSION["pat_email"])){echo $_SESSION["pat_email"];} ?>" name="email" type="email" placeholder="E-Mail" class="form-control input-md" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="mobile">Mobile</label>
                                        <input id="number" name="mobile" type="number" placeholder="Mobile No" class="form-control input-md" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="Gender">Patient Gender</label><br>
                                        Male <input value="Male"  name="gender" type="radio" class="p-3 d-inline input-md"> <br>
                                        Female <input value="Female" name="gender" type="radio" class="p-3 d-inline input-md" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Preferred Date</label>
                                        <input id="date" name="date" type="date" placeholder="Preferred Date" class="form-control input-md" required>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                        <select id="time" name="time" class="form-control">
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
                                <!-- Button -->
                                <div class="col-md-12 text-center">

                                    <input type="submit" class="btn p-2 btn-block btn-outline-success" name="appoinment" value="Make An Appointment">
                                    
                                    
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
    </div>
    <!-- End Appointment -->
</div>
</div>
<!-- footer -->
<?php
include "include/footer.php";
?>