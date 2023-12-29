
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!DOCTYPE html>
<html> 
<head>
	<title> SHCS </title>

	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style1.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/footer.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
	
</head>

<body>
	<div class="wrapper">
		<div class="header-v1">
			<div class="topbar-v1">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="list-inline top-v1-contacts">
								<li>
									<i class="fa fa-envelope"></i> Email: D2021.CMPN@ves.ac.in
								</li>
								<li>
									<i class="fa fa-phone"></i> Contact no : 99887 76655
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="navbar mega-menu" role="navigation">
				<div class="container">
					<div class="res-container">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<div class="navbar-brand">
							<a href="index.html">
								<img src="assets/images/logo/SHCH.png" alt="Logo" width = "250" height = "100">
							</a>
						</div>
					</div>
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="res-container">
							<ul class="nav navbar-nav">

								<li class="mega-menu-fullwidth">
									<a href="index.php" >
										HOME
									</a>

								</li>

								<li class="mega-menu-fullwidth">
									<a href="doctor.php" >
										DOCTORS
									</a>

								</li>

								<!-- <li class="mega-menu-fullwidth">
									<a href="#" >
										ARTICLES
									</a>	
								</li> -->

								<li class="mega-menu-fullwidth">
									<a href="feedback.php" >
										FEEDBACK
									</a>	
								</li>

								<li class="mega-menu-fullwidth">
									<a href="login.php">
										LOGIN
									</a>
								</li>
								<li class="mega-menu-fullwidth">
									<a href="ayurblog.html">
										SWITCH AYURVEDA
									</a>
								</li>

							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="container content-md welcomeSection">
			<div class="row section1">
				<div class="col-md-6" style="margin-bottom: 40px;" style="border:2px solid black ; background: green;">
					<h2 class="title-v2">WELCOME TO <span style="color: #72c02c;"> SHCS </span></h2>
					<p style="text-align: justify; font-size: 14px;">We, students of VESIT, have created this project to break the barrier between patients and doctors. Feel free to look around the website and get yourself comfortable as this is your one step to better health</p>
					<a href="about.html" class="btn-u btn-brd btn-brd-hover">Read More</a>
				</div>
				<div class="col-md-6 overflow-h">
					<img style="border-radius: 50px; margin-left: 30px;" src="assets/images/bg/1.jpg" alt=""width = "500" height = "300">
				</div>
			</div>
		</div>


		<div class="container" style="margin-top: 50px;">
			<div class="headline-center" style="margin-bottom: 60px;">
				<h2>Our Specialities</h2>
				<div class="line"></div>
				<p>Our doctors are associated with speciality hospital with state-of-the-art facilities & treatment center.</p>
			</div>

			<div class="row" style="margin-bottom: 40px;">
				<div class="col-md-4">
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<i class="icon-medical-005" style="border-radius: 50%;"></i>
						<div class="overflow-h">
							<h3 class="no-top-space">24/7 support</h3>
							<p>24 Hours Consulting Service</p>
						</div>
					</div>
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<i style="border-radius: 50%;" class="icon-medical-054"></i>
						<div class="overflow-h">
							<h3 class="no-top-space">Ophthalmologists</h3>
							<p>You call them eye doctors. They can prescribe glasses or contact lenses and diagnose and treat diseases.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<i style="border-radius: 50%;" class="icon-medical-042"></i>
						<div class="overflow-h">
							<h3 class="no-top-space">Neurologists</h3>
							<p>These are specialists in the nervous system, which includes the brain, spinal cord, and nerves.</p>
						</div>
				</div>

				</div>
				<div class="col-md-4">
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<i style="border-radius: 50%;" class="icon-medical-069"></i>
						<div class="overflow-h">
							<h3 class="no-top-space">Rheumatologists</h3>
							<p>They specialize in arthritis and other diseases in your joints, muscles, bones, and tendons.</p>
						</div>
					</div>
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<i style="border-radius: 50%;" class="icon-medical-061"></i>
						<div class="overflow-h">
							<h3 class="no-top-space">Otolaryngologists</h3>
							<p>They treat diseases in the ears, nose, throat, sinuses, head, neck, and respiratory system.</p>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">

						<div class="col-md-3 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/images/logo/SHCH.png" alt=""></a>
							<p>At SHCH, our mission is to deliver high-quality, healthcare services to everyone at the tip of their fingers.</p>
						</div>

						<div class="col-md-3" style="margin-bottom: 40px;">
							<div class="headline"><h2>Useful Links</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="about.html">About us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="Contact.html">Contact us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="appointment.html">Book Appointment</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div>

						<div class="col-md-3 map-img" style="margin-bottom: 40px;">
							<div class="headline"><h2>Contact Us</h2></div>
							<address class="md-margin-bottom-40">
								VESIT  <br />
								Chembur, IN <br />
								Phone: 99887 76655 <br />
								Email: D2021.CMPN@ves.ac.in 
							</address>
						</div>
					</div>
				</div>
			</div>

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2022 &copy; All Rights Reserved.
								<a href="privacy.html">Privacy Policy</a> | <a href="terms.html">Terms of Service</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>