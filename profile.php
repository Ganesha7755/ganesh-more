

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

	<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

</head>
<body>
	<div class="banner" id="home">
		<div class="navbar navbar-default w3ls-navbar">
			<div class= "container brand1">
				<a href="photo_home.php" class="navbar-brand w3-logo">PICOLEX</a>
				
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
								if($_SESSION["photo_email"]==true)
								{}
								else
								{
									header('location:index.php');
								}
							?>
							<li><a href="logout.php"><span>Logout</span></a></li>
							<li><a href="photo_home.php"><span>Home</span></a></li>
						</ul>

					</div>
					</div>
				</div>
				
			</div>
			

		</div>
		



	
	
	<!-- contact -->
	<div class="w3-contact" id="contact">

	
	<?php


Include('connect.php');


$sql = "SELECT * FROM photographer_reg WHERE photo_email = '" . $_SESSION['photo_email'] . "'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$name =$row['photo_fname'];
$profile=$row['profile_photo'];

echo" <div class='card'>
<h2><br>Profile Information</h2>
<hr>
  <img src='photographer_profile/$profile'  style='width:100%'>
  <h1>$name</h1>
  <p class='title'>Photographer</p>
  <p>
<table align='center'>

		<tr>
		  
		  </tr>
	  </table>

	  <table align='center'>
		<tr>
			  
			<td><strong>Mobile No.: </strong>" . $row['photo_mob'] . "<br><br></td>
			<td><strong>City: </strong>" . $row['photo_city'] . "<br><br></td>
		</tr>

		  <tr>
			  
			<td><strong>State: </strong>" . $row['photo_state'] . "<br><br></td>
			<td><strong>Pincode: </strong>" . $row['photo_pin'] . "<br><br></td>
		 
		  </tr>

		  <tr>
			  
			<td><strong>Email: </strong>" . $row['photo_email'] . "<br><br></td>
			<td><strong>Category Specialization: </strong>" . $row['photo_cat'] . "<br><br></td>
		 
		  </tr>

		  <tr>
			  
			<td><strong>Preferrable Area: </strong>" . $row['photo_area'] . "<br><br></td>
			<td><strong>Camera Owned: </strong>" . $row['photo_cam'] . "<br><br><br><br></td>
		 
		  </tr>

		  <tr>
			  
			<td><strong>Experience: </strong>" . $row['photo_exp'] . "<br><br><br><br></td>
		 
		  </tr>

	  </table>
		  
</p>
  
<p><button></button></p>";
?>
</div>
		
		<table align="center" width="80%"  >

			<tr align="center" >
				<td><h1><br><br></h1></td>

			</tr>


		

		</table>

		<style>
			table 
			{
			    font-family: arial, sans-serif;
			    border-collapse: collapse;
			    width: 60%;
			}

			th 
			{
			    border: 0px solid #000000;
			    padding: 8px;
			    font-size: 20px;
			    text-align: center;
			}

			td
			{
				border: 0px solid #000000;
				font-size: 20px;
				text-align: center;
				padding: 6px;
			}

			
		</style>

		
	
	</div>

	<div class="footer">
			<div class="container">
				<div class="menu">
					<ul class="list">
						<li><a href="photo_home.php">Home</a></li>
						
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
						<li><a href="contact_us_photo.php">Contact us</a></li>
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

