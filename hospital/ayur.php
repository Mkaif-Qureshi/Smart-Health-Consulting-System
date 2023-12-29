<!DOCTYPE html>
<html> 
<head>
	<title> SHCS </title>

	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/footer.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/blog_timeline.css">
	<style>
    .container2 {
      max-width: 350px;
      margin: 50px auto;
      text-align: center;
    }
    input[type="submit"] {
      margin-bottom: 20px;
    }
    .select-block {
      width: 300px;
      margin: 110px auto 30px;
      position: relative;
    }
    select {
      width: 100%;
      height: 50px;
      font-size: 100%;
      font-weight: bold;
      cursor: pointer;
      border-radius: 0;
      background-color: #1A33FF;
      border: none;
      border: 2px solid #1A33FF;
      border-radius: 4px;
      color: white;
      appearance: none;
      padding: 8px 38px 10px 18px;
      -webkit-appearance: none;
      -moz-appearance: none;
      transition: color 0.3s ease, background-color 0.3s ease, border-bottom-color 0.3s ease;
    }
    /* For IE <= 11 */
    select::-ms-expand {
      display: none;
    }
    .selectIcon {
      top: 7px;
      right: 15px;
      width: 30px;
      height: 36px;
      padding-left: 5px;
      pointer-events: none;
      position: absolute;
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    .selectIcon svg.icon {
      transition: fill 0.3s ease;
      fill: white;
    }
    select:hover,
    select:focus {
      color: #000000;
      background-color: white;
    }
    select:hover~.selectIcon,
    select:focus~.selectIcon {
      background-color: white;
    }
    select:hover~.selectIcon svg.icon,
    select:focus~.selectIcon svg.icon {
      fill: #1A33FF;
    }

    .B1{
      background-color: #00ab9f;
      color: white;
      width: 120px;
      height: 40px;
      border-radius: 10px; 
    }
  </style>
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
									<a href="ayurblog.html" >
										ARTICLES
									</a>	
								</li>

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
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div style="text-align: center; margin-top: 50px; margin-bottom: 40px;">
			<h2></h2>
		</div>
		

		<!-- EDIT -->
		<div class="container2 mt-5">
			<form action="" method="post" class="mb-3">
			  <div class="select-block">
				<select name="Fruit">
				  <option value="" disabled selected>Choose option</option>
				  <option value="cold">Cold</option>
				  <option value="stress">Stress</option>
				  <option value="weakness">waekness</option>
				</select>
				<div class="selectIcon">
				  <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
					<path d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z"></path>
				  </svg>
				</div>
			  </div>
			  <input class="B1" type="submit" name="submit" vlaue="Choose options">
			</form>
		</div>
		<!-- EDIT -->
    <?php
  if(isset($_POST['submit'])){
    if(!empty($_POST['Fruit'])) {
      $selected = $_POST['Fruit'];
      if($selected == 'cold'){
          echo "<center>2 cups water\n
          4 teaspoons fresh grated ginger\n
          ½ teaspoon ashwagandha powder\n
          2 teaspoons tulsi powder\n
          ¼ teaspoon cardamom powder\n
          ½ lemon squeezed\n
          Honey to taste\n</center>";
      }
      elseif($selected == 'stress'){
        echo "<center>1 cup cashews, soaked overnight\n
        Approximately 2 cups filtered water*\n
        1 teaspoon maple syrup\n
        1/2 teaspoon vanilla bean, ground\n
        1 teaspoon cinnamon powder\n
        1/4 teaspoon nutmeg, grated\n
        1/2 teaspoon ashwagandha powder\n
        Pinch of sea salt\n</center>";
      }
      elseif($selected == 'weakness'){
        echo "<center>Make homemade cashew milk by adding soaked cashews to a blender with enough filtered water to fill 1 inch above cashews. Blend until smooth. (You will use 8 ounces of the milk in your recipe and any extra will keep for a few days in an airtight jar or bottle in your refrigerator.)
        Add cashew milk, maple syrup, vanilla bean, cinnamon, nutmeg, ashwagandha, and sea salt to a small pot. Heat on high, removing before it comes to a boil. Stir using a spoon, whisk, or milk frother to be sure everything is combined. Relax, savor, and enjoy!
        *Note: If it gets too thick, add water until you get the consistency you like.</center>";
      }
    } else {
      echo 'Please select the value.';
    }
  }
?>


		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">

						<div class="col-md-3 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo/SHCH.png" alt=""></a>
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
</html>
