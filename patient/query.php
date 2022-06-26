<!-- header -->
<?php
define('title', ' Query-Welcome to the HealthLab');
define('page', 'query');
session_start();
include "../db_connection.php";
include "include/header.php";
if(!isset($_SESSION["pat_email"])){
header("location:login.php");
}
else{
    $pat_email=$_SESSION["pat_email"];
}
// $sql = "select * from pat_regestration inner join query on pat_regestration.pat_id=query.pat_id where pat_email='$pat_email'";

$sql="select * from pat_regestration where pat_email='$pat_email'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
$pat_id=$row["pat_id"];
$pat_email=$row["pat_email"];



if(isset($_POST["submit"])){
    $query = mysqli_real_escape_string($conn, trim($_POST["query"]));
    $sql="INSERT INTO query(pat_id, pat_email, query) VALUES ('$pat_id','$pat_email','$query')";
    $query=mysqli_query($conn,$sql);
    if($query){
        $msg = "<div class='alert alert-success p-2 ml-3 my-3'>Successfully Submitted</div>";
    } else {
        $msg = "<div class='alert alert-warning p-2 ml-3 my-3'>Not Submit</div>";

    }
}
?>



<div class="col-lg-9 my-2">
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Your Question :</label>
                    <textarea class="form-control" name="query" id="" rows="3"></textarea>
                </div>
                <input type="submit" class="btn btn-outline-primary" name="submit" value="Ask Question"> 
                <?php if(isset($msg)){echo $msg;} ?>
            </form>
        </div>
        <div class="col-lg-6 jumbotron p-5">
            
            <p class="text-left text-primary">
                <?php
                    $sql="select * from query where pat_id='$pat_id' order by query_id desc limit 1";
                    $query=mysqli_query($conn,$sql);
                    
                ?> 
                <?php 
                    while( $query_row=mysqli_fetch_assoc($query)){
                        
                        ?>
                        
                         <span><?php echo $query_row["query"]  ."<br>"; ?></span>
                        <?php
                    }
                ?>
            </p>
            <p class="text-right text-success">
                <?php
                    $sql="select * from query_reply where pat_id='$pat_id' order by query_reply_id desc limit 1";
                    $query=mysqli_query($conn,$sql);
                ?> 
                <?php 
                    while( $query_row_reply=mysqli_fetch_assoc($query)){
                         ?>
                        <span><?php echo  $query_row_reply["query_reply"]  ."<br>" ; ?></span>
                        <?php
                    }
                ?>
                
            </p>
        </div>
    </div>
    

</div>




<!-- footer -->
<?php
include "include/footer.php";
?>