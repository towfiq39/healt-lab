<!-- header -->
<?php
define('title', ' Appoinment Details-Welcome to the HealthLab');
define('page', 'profile');
session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["pat_email"])){
header("location:login.php");
}
else{
    $pat_email=$_SESSION["pat_email"];
}

if(isset($_POST["view"])){
    $appo_id=$_POST['appo_id'];

}
 $sql="select * from book_appoinment where appointment_id='$appo_id'";
 $query=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($query);

?>



<div class="col-lg-9">

<h2 class="text-center bg-success text-white p-2"><?php echo $row["pat_name"]; ?> Appopoinment Details</h2>
   
<?php if (isset($msg)) {echo $msg;}?>
    <table class="table table-hover p-0">
        
        <tr>
            <th>ID</th>
            <td ><?php echo $row["appointment_id"]; ?></td>
        </tr>
        <tr>
            <th>Name</th> 
            <td scope="row"><?php echo $row["pat_name"]; ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td scope="row"><?php echo $row["pat_gender"]; ?></td>
        </tr>  
        <tr>
            <th>Mobile</th>
            <td scope="row"><?php echo $row["pat_number"]; ?></td>

        </tr>  
        <tr>
            <th>Date</th>
            <td scope="row"><?php echo $row["appoinment_date"]; ?></td>

        </tr>  
        <tr>
            <th>Time</th>
            <td scope="row"><?php echo $row["appoinment_time"]; ?></td>

        </tr>  
        <tr>
            <th>Depeartment</th>
            <td scope="row"><?php echo $row["dept"]; ?></td>

        </tr>  
        <tr>
            <th>Doctor</th>
            <td scope="row"><?php echo $row["doc_name"]; ?></td>

        </tr>  
    
    </table>    


<a href="profile.php" class="btn btn-outline-success">Back To Profoile</a>
    
    </div>


</div>




<!-- footer -->
<?php
include "include/footer.php";
?>