<?php
    session_start();
    include('db_connection.php');
    $doc_id= $_GET["doc_id"];
    
    $sql="select * from add_doctor where doc_id='$doc_id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($query);

    ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Doctor Details-<?php echo $row["doc_name"]; ?></title>
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- fontawesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

	</head>


    <div class="row container-fluid my-4">
        <div class="col-lg-4 offset-lg-1">
            <h2>Doctor Picture</h2>
            <img src="<?php echo str_replace('..', '.', $row["doc_pic"]); ?>" class="img-thumbnail" alt="" style="height:auto">
        
        </div>
        <div class="col-lg-7 mx-auto">
            <h2>Doctor Details</h2>
            <table class="table table-hover p-0" >
                
                <tr>
                    <th>Name</th> 
                    <td scope="row"><?php echo $row["doc_name"]; ?></td>
                </tr>
                <tr>
                    <th> Email</th>
                    <td scope="row"><?php echo $row["doc_email"]; ?></td>
                </tr>  
               
                <tr>
                    <th>Profession Details</th>
                    <td  scope="row"><?php echo $row["doc_details"]; ?></td>
                </tr>  
               
            </table>   
            <a href="index.php" class="btn btn-outline-primary">Go Back To Home Page</a> 
        </div>
    </div>
    	<!-- first add jquery then fontawesome then popper and lastly bootstrap -->
			
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/all.min.js"></script>
			
	</body>
</html>