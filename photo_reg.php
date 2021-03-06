
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>PICOLEX | Photography</title>
	<meta name="keywords" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet"> 
</head>
<body>
	<div class="banner" id="home">
		<div class="navbar navbar-default w3ls-navbar">
			<div class= "container brand1">
				<a href="index.php" class="navbar-brand w3-logo">PICOLEX</a>
				
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- navbar collapse -->
				<div class="collapse navbar-collapse navHeaderCollapse">
					
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="cust_or_photo.php"><span>Register</span></a></li>
							<li><a href="cust_or_photo2.php"><span>Log in</span></a></li>
							<li><a href="index.php"><span>Home</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
			

		</div>
		
	
	<!-- contact -->
	<div class="w3-contact" id="contact">
		<div class="container contact1">

			<script language="javascript" type="text/javascript" src="js/photo_validate.js">

    		</script>

			<h3 class="center">Photographer Registration</h3>
			<form name="register" action="photo_reg_action.php" onSubmit="return photo_validate()" method="post" enctype="multipart/form-data">
				<div class="sect2">
					<div class="details1">
						
						
							<label>Full Name :</label>
							<input type="text" name="photo_fname" placeholder="Eg. Rakesh Govind Ranade" required>
							<label>Mobile No.:</label>
							<input type="text" name="photo_mob" placeholder="Eg. 9483465743" required>
							<label>City :</label>
							<input type="text" name="photo_city" placeholder="Eg. Pune" required>
							<label>State :</label>
							<input type="text" name="photo_state" placeholder="Eg. Maharashtra" required>
							<label>Pincode :</label>
							<input type="text" name="photo_pin" placeholder="Eg. 411005" required>
							<label>Email : (Username)</label>
							<input type="email" name="photo_email" placeholder="Eg. abcde@gmail.com" required>
							<label>Password :</label>
							<input type="password" name="photo_pass" placeholder="Enter Password" required>
							<br><br>
							<label>Confirm Password :</label>
							<input type="password" name="photo_cpass" placeholder="Re-enter Password" required>
							
							
						
					
					</div>
					<div class="details2">
					
						
							<label>Category: (Important)</label>
							<input type="text" name="photo_cat" placeholder="Eg. Landscape, Wedding, Wild" required>
							<label>Area : (Important)</label>
							<input type="text" name="photo_area" placeholder="Eg. Koregaon Park" required>
							<label>Camera :</label>
							<input type="text" name="photo_cam" placeholder="Eg. Canon EOS 60D" required>
							<label>Experience : </label>
							<select name="photo_exp" required>
							  <option value=" ">Choose an option</option>
							  <option value="3 months">3 months</option>
							  <option value="6 months">6 months</option>
							  <option value="9 months">9 months</option>
							  <option value="1 Year">1 Year</option>
							  <option value="2 Years">2 Years</option>
							  <option value="3 Years">3 Years</option>
							  <option value="4 Years">4 Years</option>
							  <option value="5 Years">5 Years</option>
							  <option value="6 Years">6 Years</option>
							  <option value="7 Years">7 Years</option>
							  <option value="8 Years">8 Years</option>
							  <option value="9 Years">9 Years</option>
							  <option value="10+ Years">10+ Years</option>
							</select>
							<br><br>
							<label>Profile Photo : </label>
							<br>
							
							  <input type="file" name="pic" accept="image/*" required>
							

							<br>
							<label>Sample Photos : (Maximum 5) </label>
							<br>
							
							  <input type="file" name="files[]" accept="image/*" multiple required>
							

					</div>
					
				</div>
			<input type="submit" value="Register"><br>
			</form>
		</div>
	<div class="footer">
			<div class="container">
				<div class="menu">
					<ul class="list">
						<li><a href="index.php">Home</a></li>
						
					</ul>
					<ul class="list-icons">
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
						<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fa fa-vk"></span></a></li>
					</ul>
				</div>
				<div class="menu1">
					<ul class="list2">
						<li><a href="contact_us.php">Contact us</a></li>
						<li><span class="fa fa-envelope-o" aria-hidden="true"></span><a>mustangrace@gmail.com</a></li>
						<li><span class="fa fa-volume-control-phone" aria-hidden="true"></span>+91 8600628676</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
	<div class="agileits-w3layouts">
		<div class="container">
			<!-- <p>© 2017 Photosnap. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->
			<p>2018 PICOLEX. All Rights Reserved.</p>
		</div>
	</div>
	<!-- //copyright -->
	<!-- //contact -->
	<!-- scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/numscroller-1.0.js"></script>
	<!-- here starts scrolling icon -->
		<script type="text/javascript" src="js/move-top.js"></script>
			<!-- smooth-scrolling-of-move-up -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
	<!-- //smooth-scrolling-of-move-up --> 
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->
<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->	
	<!-- fliter-JavaScript -->
		<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>

</body>
</html>