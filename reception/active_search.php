<!-- header start -->
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Site Metas -->
	<title>Search Patient Details</title>
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
	
</head>





<body class="bg-primary text-white">



<div class="row container-fluid mt-5">
	<div class="col-lg-10 mx-auto ">
		<h2 class="d-inline mr-3">Patient Details:</h2><p class="float-right"><a href="viewappoinment.php" class="btn btn-outline-light">Back to Reception</a></p>
		<?php

			session_start();
			include('../db_connection.php');
			if(isset($_POST["search"])){
				$pat_number=$_POST["pat_number"];
			}
			$sql="select * from book_appoinment where pat_number like '%$pat_number%' and confirmation='active' ";
			$query=mysqli_query($conn,$sql);

			
				
				
?>
		<table class="table table-hover p-0 mt-5 container-fluid">
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
			<tbody>
			<?php
			if(mysqli_num_rows($query)>0){
			while($row=mysqli_fetch_assoc($query)){

			?>
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
				<form action="" class="d-inline"  method="POST"><input type="hidden" name="id" value="<?php echo $row["appointment_id"]; ?>"><button class="btn btn-dark " name="delete" type="submit"><i class="fas fa-trash"></i></button></form>
			
				</td>
            
        	</tr>
       <?php
	   
	}
} else{
	$msg = "<div class='alert alert-light p-5 col-sm-5 my-2 '>
		 Please Enter Valid Phone Number
	 </div>";
}
 ?>
   		 </tbody>

	</table>
<?php
if (isset($msg)) {
	echo $msg;
}
?>

	</div>
</div>





	<!-- first add jquery then fontawesome then popper and lastly bootstrap -->
			
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/all.min.js"></script>
			
</body>
</html>