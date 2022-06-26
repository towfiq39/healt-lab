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
<h2 class="bg-primary text-white p-4">HealthLab</h2>
<div class="row container-fluid" >
    <div class="col-lg-3">
        <div class="list-group">
           
            <a class="list-group-item <?php if (page == 'profile') {echo 'active';}?> " href="profile.php">
            <i class="fab fa-accessible-icon"></i>
            Profile
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
