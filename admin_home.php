
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
				<a href="admin_home.php" class="navbar-brand w3-logo">PICOLEX</a>
				
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
								if($_SESSION["user_name"]==true)
								{}
								else
								{
									header('location:index.php');
								}
							?>

							<li><a href="logout.php"><span>Logout</span></a></li>
							<li><a href="admin_home.php"><span>Home</span></a></li>
						</ul>

					</div>
					</div>
				</div>
				
			</div>
			

		</div>
		



	
	
	<!-- contact -->
	<div class="w3-contact" id="contact">
		
		

		<table align="center" width="60%">

			<tr align="center" >
				<td><a href="accept_reject.php"><img src="images/accept_reject.jpg" alt="Image Not Available" style="width:300px;height:200px;"></a></td>
				<td><a href="admin_customers.php"><img src="images/customers.jpg" alt="Image Not Available" style="width:300px;height:200px;"></a></td>
			</tr>

		</table>

		<table align="center" width="60%">
			<br>
			<tr align="center">
				<td><h4 style="width:300px;height:130px;"><strong>PERMISSION FOR MEETINGS</strong></h4></td>
				<td><h4 style="width:304px;height:130px;"><strong>CUSTOMER DETAILS</strong></h4></td>
			</tr>
		</table>

	<table align="center" width="60%">

			<tr align="center" >
				<td><a href="admin_photographers.php"><img src="images/photographers.jpg" alt="Image Not Available" style="width:300px;height:200px;"></a></td>
				<td><a href="admin_stock_upload.php"><img src="images/stock2.jpg" alt="Image Not Available" style="width:300px;height:200px;"></a></td>
			</tr>

		</table>

		<table align="center" width="60%">
			<br>
			<tr align="center">
				<td><h4 style="width:300px;height:130px;"><strong>PHOTOGRAPHER DETAILS</strong></h4></td>
				<td><h4 style="width:304px;height:130px;"><strong>STOCK IMAGES</strong></h4></td>
			</tr>

		</table>
		<table align="center" width="60%">

			<tr align="center" >
				<td><a href="print.php"><img src="images/print.jpg" alt="Image Not Available" style="width:300px;height:200px;"></a></td>
				
			</tr>
		<table align="center" width="60%">
			<br>
			<tr align="center">
				<td><h4 style="width:300px;height:130px;"><strong>PRINT</td>
				</tr>

		</table>

	<div class="footer">
			<div class="container">
				<div class="menu">
					<ul class="list">
						<li><a href="admin_home.php">Home</a></li>
						
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

