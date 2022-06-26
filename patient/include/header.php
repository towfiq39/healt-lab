<!-- header start -->
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Site Metas -->
	<title><?php echo title ?></title>
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

<body>
<div class="heading bg-primary text-white p-3 mb-1">
<a href="../index.php" class="btn btn-outline-light"><h2>HealthLab</h2></a>

</div>
<div class="row container-fluid" >
    <div class="col-lg-3">
        <div class="list-group">
            <a class="list-group-item <?php if (page == 'profile') {echo 'active';}?>" href="profile.php">
            <i class="fas fa-user"></i>
            Profile
            </a>
            <a class="list-group-item <?php if (page == 'appoinment') {echo 'active';}?> " href="make_appoinment.php">
            <i class="fas fa-plus"></i>
            Appoinment
            </a>
            <a class="list-group-item <?php if (page == 'query') {echo 'active';}?>" href="query.php">
                <i class="fas fa-align-center"></i>
                Query
            </a>

            <a class="list-group-item <?php if (page == 'chngpass') {echo 'active';}?>" href="changepassword.php">
                <i class="fas fa-key"></i>
                Change Password
            </a>
            <a class="list-group-item" href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </a>
        </div>
    </div>

