<!-- start header -->

<?php
session_start();
 include('include/header.php');
 include('db_connection.php');
  ?>
<!-- end header -->

	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
			
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
								<a href="#contact" class="btn">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>We are Expert in The Field of Health Lab</h1>
									<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum</p>
								<a href="#gallery" class="btn">Gallery</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
								<a href="#services" class="btn">Service</a>
							</div>
						</div>
					</div>

					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-003.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
								<a href="patient/profile.php" class="btn">My Profile</a>
							</div>
						</div>
					</div>
				</div><!-- .pogoSlider -->
				</div>
			</div>
		</div>
		<!-- End Banner -->

		<!-- Start About us -->
		<div id="about" class="about-box">
			<div class="about-a1">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="title-box">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="row align-items-center about-main-info">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<h2> Welcome to Health Lab </h2>
									<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
									<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis cum incidunt autem corrupti tempora facere quaerat, quisquam aperiam recusandae itaque, fugit placeat assumenda distinctio, numquam perferendis? Ipsa adipisci cum dolor distinctio nemo omnis culpa inventore. In, autem accusamus dolorem numquam!</p>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="about-m">
										<ul id="banner">
											<li>
												<img src="images/about-img-01.jpg" alt="">
											</li>
											<li>
												<img src="images/about-img-002.jpg" alt="">
											</li>
											<li>
												<img src="images/about-img-003.jpg" alt="">
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End About us -->
		<!-- Start Services -->
		<div id="services" class="services-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Services</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<div class="serviceBox">
									<div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div>
									<h3 class="title">Clinical Laboratory </h3>
									<p class="description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
									</p>
								
								</div>
							</div>
							<div class="item">
								<div class="serviceBox">
									<div class="service-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
									<h3 class="title">Physological Therapy </h3>
									<p class="description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
									</p>
									
								</div>
							</div>
							<div class="item">
								<div class="serviceBox">
									<div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
									<h3 class="title">400+ Bed</h3>
									<p class="description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
									</p>
									
								</div>
							</div>
							<div class="item">
								<div class="serviceBox">
									<div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
									<h3 class="title">20+ Experienced Doctor</h3>
									<p class="description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
									</p>
									
								</div>
							</div>
							<div class="item">
								<div class="serviceBox">
									<div class="service-icon"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
									<h3 class="title">Broken or Fracture</h3>
									<p class="description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
									</p>
									
								</div>
							</div>
							<div class="item">
								<div class="serviceBox">
									<div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
									<h3 class="title">Radiation Therapy</h3>
									<p class="description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
									</p>
									
								</div>
							</div>
							<div class="item">
								<div class="serviceBox">
									<div class="service-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
									<h3 class="title">Internal Medicine Store</h3>
									<p class="description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
									</p>
									
								</div>
							</div>
							<div class="item">
								<div class="serviceBox">
									<div class="service-icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
									<h3 class="title">50+ Experienced Nurse</h3>
									<p class="description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
									</p>
								
								</div>
							</div>
							<div class="item">
								<div class="serviceBox">
									<div class="service-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
									<h3 class="title">24 Hour Ambulence</h3>
									<p class="description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
									</p>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Services -->
		<!-- appointment start -->
		<?php
		if(isset($_SESSION["pat_email"])){
		include('appoinment.php');
		}
		?>
		<!-- appointment end -->
		<!-- Start Gallery -->
		<div id="gallery" class="gallery-box">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Gallery</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
						</div>
					</div>
				</div>
				<div class="popup-gallery row clearfix">
					<div class="col-md-3 col-sm-6">
						<div class="box-gallery">
							<img src="images/slider-02.jpg" alt="">
							<div class="box-content">
								<ul class="icon">
									<li><a href="images/slider-02.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="box-gallery">
							<img src="images/gallery-006.jpg" alt="">
							<div class="box-content">
								<ul class="icon">
									<li><a href="images/gallery-006.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="box-gallery">
							<img src="images/gallery-003.jpg" alt="">
							<div class="box-content">
								<ul class="icon">
									<li><a href="images/gallery-003.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="box-gallery">
							<img src="images/gallery-004.jpg" alt="">
							<div class="box-content">
								<ul class="icon">
									<li><a href="images/gallery-004.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="box-gallery">
							<img src="images/gallery-005.jpg" alt="">
							<div class="box-content">
								<ul class="icon">
									<li><a href="images/gallery-005.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="box-gallery">
							<img src="images/gallery-002.jpg" alt="">
							<div class="box-content">
								<ul class="icon">
									<li><a href="images/gallery-002.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="box-gallery">
							<img src="images/gallery-007.jpg" alt="">
							<div class="box-content">
								<ul class="icon">
									<li><a href="images/gallery-007.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="box-gallery">
							<img src="images/gallery-008.jpg" alt="">
							<div class="box-content">
								<ul class="icon">
									<li><a href="images/gallery-008.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Gallery -->
		<!-- Start Team -->
		<div id="team" class="team-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Our Doctor</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
						</div>
					</div>
				</div>

				
				<div class="row">
					<?php
					$sql="select * from add_doctor";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($query)){
					?>
					<a href="doc_details.php?doc_id=<?php echo $row["doc_id"] ?>">
						<div class="col-md-4 col-sm-6">
							<div class="our-team">
								<div class="pic">
									<img src="<?php echo str_replace('..', '.', $row["doc_pic"]); ?>" class="img-fluid" alt="">
								</div>
								<div class="team-content">
									<h3 class="title"><?php echo $row["doc_name"] ?></h3>
									<small class="text-white"><?php echo $row["doc_email"] ?></small>
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</a>
					
					<?php	
						}
					?>
				</div>
				
			</div>
		</div>
		<!-- End Team -->

		<!-- appointment start -->
		<?php include('contact.php') ?>
		<!-- appointment start -->
<!-- start header -->
<?php include('include/footer.php') ?>
<!-- end header -->
