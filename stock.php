

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
		
				

<!--  gallery -->
		<div data-target="gallery" id="gallery">
            <div class="container">
				<div class="portfolio w3ls-section" id="port">

					<h3 class="center">Stock Images</h3>
					<ul class="simplefilter">
						<li class="active" data-filter="all" data-aos="slide-down">show all</li>
						<li data-filter="1" data-aos="slide-down">Candid</li>
						<li data-filter="2" data-aos="slide-down">Landscape</li>
						<li data-filter="3" data-aos="slide-down">Underwater</li>
						<li data-filter="4" data-aos="slide-down">Wild Life</li>
						<li data-filter="5" data-aos="slide-down">Food</li>
					</ul>
					<div class="scrollbar agileits-portfolio-scroll">
					<div class="filtr-container">


<!-- ------------------------- CANDID ---------------------------- -->
							

<?php

Include('connect.php');
$sql1 = "select *from admin_gallary where photo_type='CANDID'";
$res1=mysql_query($sql1);


	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['image_copy'];
	echo"<div class='filtr-item gallery-t' data-category='1' data-sort='Busy streets'>
	<a href='images/admin_stock_image/$images' class='b-link-stripe b-animate-go thickbox'>
		<figure class='w3ls-gallery'>

		<img src='images/upload/admin/$images' class='img-responsive' width='auto'style='height: 136px;width:283px;'/>	 
			 
		</figure>
	</a>
</div>";
	
}
?>


<!-- ------------------------- Landscape ---------------------------- -->
<?php

Include('connect.php');
$sql1 = "select *from admin_gallary where photo_type='Landscape'";
$res1=mysql_query($sql1);


	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['image_copy'];
	echo"<div class='filtr-item gallery-t' data-category='2' data-sort='Busy streets'>
	<a href='images/admin_stock_image/$images' class='b-link-stripe b-animate-go thickbox'>
		<figure class='w3ls-gallery'>

		<img src='images/upload/admin/$images' class='img-responsive'width='auto'style='height: 136px;width:283px;' />	 
			 
		</figure>
	</a>
</div>";
	
}
?>
<!-- ------------------------- Underwater ---------------------------- -->
<?php

Include('connect.php');
$sql1 = "select *from admin_gallary where photo_type='Underwater'";
$res1=mysql_query($sql1);


	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['image_copy'];
	echo"<div class='filtr-item gallery-t' data-category='3' data-sort='Busy streets'>
	<a href='images/admin_stock_image/$images' class='b-link-stripe b-animate-go thickbox'>
		<figure class='w3ls-gallery'>

		<img src='images/upload/admin/$images' class='img-responsive' width='auto'style='height: 136px;width:283px;'/>	 
			 
		</figure>
	</a>
</div>";
	
}
?>
<!-- ------------------------- Wild ---------------------------- -->
<?php

Include('connect.php');
$sql1 = "select *from admin_gallary where photo_type='Wild'";
$res1=mysql_query($sql1);


	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['image_copy'];
	echo"<div class='filtr-item gallery-t' data-category='4' data-sort='Busy streets'>
	<a href='images/admin_stock_image/$images' class='b-link-stripe b-animate-go thickbox'>
		<figure class='w3ls-gallery'>

		<img src='images/upload/admin/$images' class='img-responsive' width='auto'style='height: 136px;width:283px;'/>	 
			 
		</figure>
	</a>
</div>";
	
}
?>
<!-- ------------------------- Food ---------------------------- -->
<?php

Include('connect.php');
$sql1 = "select *from admin_gallary where photo_type='Food'";
$res1=mysql_query($sql1);

$ranom =rand(80000,900000);
	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['image_copy'];
	echo"<div class='filtr-item gallery-t' data-category='5' data-sort='Busy streets'>
	
	<a href='images/admin_stock_image/$images' class='b-link-stripe b-animate-go thickbox'>
		<figure class='w3ls-gallery'>

		<img src='images/upload/admin/$images' class='img-responsive' width='auto'style='height: 136px;width:283px;'/>	 
			 
		</figure>
		
	</a>
	<a href='images/admin_stock_image/$images' download='$ranom.jpeg'>download</a>
</div>";
	
}
?>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	<!-- //gallery -->


	<br>
	<br>
	<br>
	
	
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

