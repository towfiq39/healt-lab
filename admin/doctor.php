<!-- header -->
<?php
define('title', ' Doctor-Welcome to the HealthLab');
define('page', 'doctor');
session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["admin_mail"])){
header("location:login.php");
}
else{
    $admin_mail=$_SESSION["admin_mail"];
}


if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['id'];
    $msg = "<div class='container alert alert-danger col-sm-8 mt-2 p-3'>
        <p>Are You Sure to Delete This Doctor? If you Delete This Doctor you Never Restore That. </p>
        <form  method='POST' >
            <input type='hidden' name='con_id' value='$id'>
            <input type='submit' name='confirm_delete' class='btn btn-danger' value='Yes Delete'>
            <a href='doctor.php' class='btn btn-primary'>Ops No Thanks</a>
        </form>
    </div>"
 
    ;
 
 }
 if (isset($_REQUEST["confirm_delete"])) {
    $con_id = $_REQUEST['con_id'];
 
    $del_sql = "DELETE FROM add_doctor WHERE doc_id = $con_id";
    $del_query = mysqli_query($conn, $del_sql);
    if ($del_query) {
        // echo "Record Deleted Successfully";
        
        $msg = "<div class='alert alert-success p-2 col-sm-5 my-2'>
             Doctor Deleted Successfully !!
         </div>";
    } else {
        $msg = "<div class='alert alert-danger p-2 col-sm-5 my-2 '>
             Ops! Doctor Not Deleted !!
         </div>";
    }
 
 }
?>

<div class="col-lg-9">
<h2 class="text-center bg-primary text-center p-2 text-white">All Doctor</h2>
<?php

 $sql="select * from add_doctor";
 $query=mysqli_query($conn,$sql);
 if(mysqli_num_rows($query)>0){
?>
<?php if (isset($msg)) {echo $msg;}?>
<table class="table table-hover p-0">
	 <thead>
		 <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        
            <th>Action</th>
        </tr>
    </thead>
    <?php
    while($row=mysqli_fetch_assoc($query)){

   
    
    ?>
    <tbody>
        <tr>
            <td ><?php echo $row["doc_id"]; ?></td>
            <td scope="row"><?php echo $row["doc_name"]; ?></td>
            <td scope="row"><?php echo $row["doc_email"]; ?></td>
            
            <td scope="row">
                <form action="edit_doctor.php" class="d-inline"  method="POST"><input type="hidden" name="doc_id" value="<?php echo $row["doc_id"]; ?>"><button class="btn btn-outline-success " name="view" type="submit"><span>Edit</span></button></form>
            
                <form action="" class="d-inline"  method="POST"><input type="hidden" name="id" value="<?php echo $row["doc_id"]; ?>"><button class="btn btn-outline-dark " name="delete" type="submit"><i class="fas fa-trash"></i></button></form>
           
            </td>
            
        </tr>
       
    </tbody>
    <?php
 }
}
  ?>
</table>


</div>

<div class="ml-auto">
<a href="add_doctor.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>








<!-- footer -->
<?php
include "include/footer.php";
?>