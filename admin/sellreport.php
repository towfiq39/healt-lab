<!-- header -->
<?php
define('title', ' Appoinment Date Range -Welcome to the HealthLab');
define('page', 'apporeport');
session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["admin_mail"])){
header("location:login.php");
}
else{
    $admin_mail=$_SESSION["admin_mail"];
}
?>


<div class="col-lg-9 col-md-12 col-sm-12 col-12 my-3">
	<form action="" method="POST" class="d-print-none">
	    <div class="form-row">
	      <div class="form-group col-md-2">
	        <input type="date" class="form-control" id="startdate" name="startdate">
	      </div> <span> to </span>
	      <div class="form-group col-md-2">
	        <input type="date" class="form-control" id="enddate" name="enddate">
	      </div>
	      <div class="form-group">
	        <input type="submit" class="btn btn-outline-primary" name="searchsubmit" value="Search">
	      </div>
	    </div>
	  
    </form>
    <?php
if (isset($_REQUEST['searchsubmit'])) {
	$startdate = $_REQUEST['startdate'];
	$enddate = $_REQUEST['enddate'];
	$sql = "SELECT * FROM book_appoinment WHERE appoinment_date BETWEEN '$startdate' AND '$enddate'";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query)) {
		echo '
  <p class=" bg-primary text-white p-2 mt-4">Details</p>
  <table class="table table-hover p-0 my-5">
   <thead>
    <tr>
      <th scope="col">Pat ID</th>
      <th scope="col">Pat Name</th>

      <th scope="col">Pat Number</th>
      <th scope="col">Pat Gender</th>
     
    </tr>
  </thead>
  <tbody>';

	while ($row = mysqli_fetch_assoc($query)) {
		echo '<tr>
    <th scope="row">' . $row["appointment_id"] . '</th>
    <td>' . $row["pat_name"] . '</td>
    <td>' . $row["pat_number"] . '</td>
    <td>' . $row["pat_gender"] . '</td>
   
    </tr>';
		}
		echo '<tr>
    <td><form class="d-print-none"><input class="btn btn-danger" type="submit" value="Print" onClick="window.print()"></form></td>
  </tr></tbody>
  </table>';
	} else {
		$msg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'> No Records Found ! </div>";
	}
}
?>
  <?php if (isset($msg)) {echo $msg;}?>
</div>






<!-- footer -->
<?php
include "include/footer.php";
?>