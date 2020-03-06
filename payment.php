

<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>PICOLEX | Photography</title>
	<meta name="keywords" content="Photosnap a Photography Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
				<a href="cust_home.php" class="navbar-brand w3-logo">PICOLEX</a>
				
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- navbar collapse -->
				<div class="collapse navbar-collapse navHeaderCollapse">

					<div class="agileinfo-social-grids">

						<ul>
							
							<?php 
								session_start();
								if($_SESSION["cust_email"]==true)
								{}
								else
								{
									header('location:index.php');
								}
							?>

							<li><a href="logout.php"><span>Logout</span></a></li>
							<li><a href="cust_home.php"><span>Home</span></a></li>
						</ul>

					</div>
					</div>
				</div>
				
			</div>
			

		</div>
		



	
	
	<!-- contact -->
	<div class="w3-contact" id="contact">
		<div class="container contact1">

		<script language="javascript" type="text/javascript" src="js/customer_validate.js">

    	</script>

			<h3 class="center">Payment Details</h3>
			<form name='register' action="cust_reg_action.php" onSubmit="return payment_validate()" method="post">
				<div class="sect2">
					<div class="details1">
						
							<input type="radio" checked="checked" name="radio" value="Credit Card"> Credit Card &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/cards.jpg" height="40px" />
							<br><br><br>

							<label>Name: (As it appears on the card)</label>
							<input type="text" name="card_number" placeholder="Full name" required>


							<label>Credit card number</label>
							<input type="text" name="card_number" placeholder="16 digit number" required>

							<label>Expiry Date: 
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CVV (?)</label>


							
							<select name="MM">
							  <option value="null">MM</option>
							  <option value="1">01</option>
							  <option value="2">02</option>
							  <option value="3">03</option>
							  <option value="4">04</option>
							  <option value="5">05</option>
							  <option value="6">06</option>
							  <option value="7">07</option>
							  <option value="8">08</option>
							  <option value="9">09</option>
							  <option value="10">10</option>
							  <option value="11">11</option>
							  <option value="12">12</option>
							</select>
							/
							<select name="YYYY">
							  <option value="null">YYYY</option>
							  <option value="2018">2018</option>
							  <option value="2019">2019</option>
							  <option value="2020">2020</option>
							  <option value="2021">2021</option>
							  <option value="2022">2022</option>
							  <option value="2023">2023</option>
							  <option value="2024">2024</option>
							  <option value="2025">2025</option>
							  <option value="2026">2026</option>
							  <option value="2027">2027</option>
							  <option value="2028">2028</option>
							  <option value="2029">2029</option>
							  <option value="2030">2030</option>
							</select>

							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="password" style="width: 60px" name="cvv" required>
							<br><br>

							<label>Billing Address: </label>
							<input type="textarea" style="width: 440px;" name="address" required>
							<br><br>

							<label>State: </label>
							<input type="textarea" style="width: 200px;" name="address" required>
							<br><br>

							<label>District: </label>
							<input type="textarea" style="width: 170px;" name="address" required>
							<br><br>

							<label>Pincode: </label>
							<input type="textarea" style="width: 100px;" name="address" required>

							
				
					</div>

					<div class="details2">
					
							<input type="radio" name="radio" value="Net Banking"> Net Banking &nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/netbanking.png" height="60px" />
							<br><br><br><br>
							<label>You will be re-directed to the bank website. </label>
				
					</div>
					
				</div>
			<input type="submit" value="Proceed"><br>
			</form>
		</div>
	<div class="footer">
			<div class="container">
				<div class="menu">
					<ul class="list">
						<li><a href="cust_home.php">Home</a></li>
						
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
						<li><a href="contact_us_cust.php">Contact us</a></li>
						<li><span class="fa fa-envelope-o" aria-hidden="true"></span><a>mustangrace@gmail.com</a></li>
						<li><span class="fa fa-volume-control-phone" aria-hidden="true"></span>+91 8600628676</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="agileits-w3layouts">
		<div class="container">
			
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

