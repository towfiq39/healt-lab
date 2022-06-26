<!-- header -->
<?php
define('title', ' Profile-Welcome to the HealthLab');
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
?>



<div class="col-lg-9">

    <?php

 $sql="select * from book_appoinment where confirmation='active' and pat_email='$pat_email'";
 $query=mysqli_query($conn,$sql);
 if(mysqli_num_rows($query)>0){
?>

<table class="table table-hover p-0">
<h2>Your Appoinment</h2>
	 <thead>
		 <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Date</th>
            <th>Time</th>
            <th>Depeartment</th>
            <th>Doctor</th>
           
            <th>Action</th>
        </tr>
    </thead>
    <?php
    while($row=mysqli_fetch_assoc($query)){

   
    
    ?>
    <tbody>
        <tr>
            <td ><?php echo $row["appointment_id"]; ?></td>
            <td scope="row"><?php echo $row["pat_name"]; ?></td>
            <td scope="row"><?php echo $row["pat_gender"]; ?></td>
            <td scope="row"><?php echo $row["pat_number"]; ?></td>
            <td scope="row"><?php echo $row["appoinment_date"]; ?></td>
            <td scope="row"><?php echo $row["appoinment_time"]; ?></td>
            <td scope="row"><?php echo $row["dept"]; ?></td>
            <td scope="row"><?php echo $row["doc_name"]; ?></td>
            
            <td scope="row">
            <form action="view_appo_details.php" class="d-inline"  method="POST"><input type="hidden" name="appo_id" value="<?php echo $row["appointment_id"]; ?>"><button class="btn btn-outline-success " name="view" type="submit"><span>View</span></button></form>
           
             </td>
            
        </tr>
       
    </tbody>
    <?php
 }
}else{
    $msg = "<div class='alert alert-warning p-5 col-sm-5 my-2 '>
	    Now	You Have No Appoinment This Time.
	    </div>";
}
  ?>
</table>
<?php if (isset($msg)) {echo $msg;}?>
    
    </div>


</div>




<!-- footer -->
<?php
include "include/footer.php";
?>