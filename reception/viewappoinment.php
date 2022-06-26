<!-- header start -->
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Site Metas -->
	<title>Receptionist-Confirm Appoinment</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Site Icons -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- fontawesome css -->
	<link rel="stylesheet" href="../css/all.min.css">
    <!-- sweet alert -->
	<?php
    
session_start();
include('../db_connection.php');


if (isset($_REQUEST['delete'])) {
   $id = $_REQUEST['id'];
   $msg = "<div class='container alert alert-danger col-sm-8 mt-2 p-3'>
       <p>Are You Sure to Delete This Course? If you Delete This Appoinment you Never Restore That. </p>
       <form  method='POST' >
           <input type='hidden' name='con_id' value='$id'>
           <input type='submit' name='confirm_delete' class='btn btn-danger' value='Yes Delete'>
           <a href='viewappoinment.php' class='btn btn-primary'>Ops No Thanks</a>
       </form>
   </div>"

   ;

}
if (isset($_REQUEST["confirm_delete"])) {
   $con_id = $_REQUEST['con_id'];

   $del_sql = "DELETE FROM book_appoinment WHERE appointment_id = $con_id";
   $del_query = mysqli_query($conn, $del_sql);
   if ($del_query) {
       // echo "Record Deleted Successfully";
       
       $msg = "<div class='alert alert-success p-2 col-sm-5 my-2'>
            Appoinment Deleted Successfully !!
        </div>";
   } else {
       $msg = "<div class='alert alert-danger p-2 col-sm-5 my-2 '>
            Ops! Appoinment Not Deleted !!
        </div>";
   }

}

    ?>
</head>

<body>
<section class="bg-primary text-white container-fluid p-4 mb-2">
    <div class="row">
        <div class="col-lg-3">
            <h2 class=" ">HealthLab</h2>
        </div>
        <div class="col-lg-3 ml-auto">
            <form class="form-inline" action="search_pat.php" method="POST">
                <input class="form-control mr-2" name="pat_number" type="search" placeholder="Patient Phone Number" required>
                <input type="submit" name="search" class="btn btn-outline-light btn-inline" value="Search">
            </form>
        </div>
    
    </div>
</section>

<div class="row container-fluid" >
    <div class="col-lg-3">
        <div class="list-group">
            <a class="list-group-item active" href="viewappoinment.php">
                <i class="fas fa-user"></i>
               Pending Appoinment
            </a>
            <a class="list-group-item " href="confirmappoinment.php">
                <i class="fas fa-user"></i>
               Confirmed Appoinment
            </a>
            <a class="list-group-item " href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
               Logout
            </a>
        </div>
    </div>
    <div class="col-lg-9">
    <?php

 $sql="select * from book_appoinment where confirmation='inactive'";
 $query=mysqli_query($conn,$sql);
 if(mysqli_num_rows($query)>0){
?>
<?php if (isset($msg)) {echo $msg;}?>
<table class="table table-hover p-0">
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
            <form action="make_confirm_appo.php" class="d-inline"  method="POST"><input type="hidden" name="appo_id" value="<?php echo $row["appointment_id"]; ?>"><button class="btn btn-outline-success " name="view" type="submit"><i class="fas fa-pen"></i></button></form>
           
            <form action="" class="d-inline"  method="POST"><input type="hidden" name="id" value="<?php echo $row["appointment_id"]; ?>"><button class="btn btn-dark " name="delete" type="submit"><i class="fas fa-trash"></i></button></form>
           
             </td>
            
        </tr>
       
    </tbody>
    <?php
 }
}
  ?>
</table>

    
    </div>
</div>


	<!-- first add jquery then fontawesome then popper and lastly bootstrap -->
			
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/all.min.js"></script>
			
</body>
</html>