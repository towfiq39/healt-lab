<!-- header -->
<?php
define('title', ' Profile-Welcome to the HealthLab');
define('page', 'profile');
session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["doc_mail"])){
header("location:login.php");
}
else{
    $doc_mail=$_SESSION["doc_mail"];
}


$sql="select * from add_doctor where doc_email='$doc_mail'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);

?>

<div class="col-lg-9">
<!-- <h2 class="text-center bg-primary p-2 text-white"><?php echo $row["doc_name"]  ?> Details</h2> -->
    <div class="row">
        <div class="col-lg-4">
        <h2>My Picture</h2>
        <img src="<?php echo $row["doc_pic"] ?>" class="img-thumbnail" alt="" style="height:350px">
        </div>
        <div class="col-lg-8">
        <h2>My Details</h2>
            <table class="table table-hover p-0">
                
                <tr>
                    <th>My ID</th>
                    <td ><?php echo $row["doc_id"]; ?></td>
                </tr>
                <tr>
                    <th>My Name</th> 
                    <td scope="row"><?php echo $row["doc_name"]; ?></td>
                </tr>
                <tr>
                    <th>My Email</th>
                    <td scope="row"><?php echo $row["doc_email"]; ?></td>
                </tr>  
               
                <tr>
                    <th>Profession Details</th>
                    <td scope="row"><?php echo $row["doc_details"]; ?></td>
                </tr>  
               
            </table>   
            <a href="edit_details.php?doctor_id=<?php echo $row["doc_id"]?>" class="btn btn-outline-primary">Edit My Details</a> 
        </div>
    </div>
    
</div>
</div>









<!-- footer -->
<?php
include "include/footer.php";
?>