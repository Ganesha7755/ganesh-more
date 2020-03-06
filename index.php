

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
				<a href="index.php" class="navbar-brand w3-logo">PICOLEX</a>
				
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- navbar collapse -->
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav w3ls-nav">
						<li><a class="scroll" href="#about"><h4>About us</h4></a></li>
						<li><a class="scroll" href="#gallery"><h4>Gallery</h4></a></li>
						<li><a class="scroll" href="#service"><h4>Services</h4></a></li>
					</ul>
					<div class="agileinfo-social-grids">
						

						<ul>
							<li><a href="cust_or_photo.php"><span>Register</span></a></li>
							<li><a href="cust_or_photo2.php"><span>Log in</span></a></li>
							<li><a href="contact_us.php"><span>Contact us</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
			

		</div>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				<div class="item active">
					<img src="images/banner1.jpg" alt="Los Angeles" style="width:100%;">
					<div class="carousel-caption">
						<h1>ARE YOU A PHOTOGRAPHER?</h1>
						<p>Apply for a Job on PICOLEX</p>
					</div>
				</div>

				<div class="item">
					<img src="images/banner2.jpg" alt="Chicago" style="width:100%;">
					<div class="carousel-caption">
						<h2>ARE YOU A CUSTOMER?</h2>
						<p>See what you can find interesting on PICOLEX</p>
					</div>
				</div>
			
				<div class="item">
					<img src="images/banner3.jpg" alt="New York" style="width:100%;">
					<div class="carousel-caption">
						<h2>ARE YOU A PHOTOGRAPHER and a CUSTOMER?</h2>
						<p>Come and Explore PICOLEX Services to its full extent</p>
					</div>
				</div>
		  
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="fa fa-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="fa fa-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	
		
	</div>
<!-- about -->
	<div class="agile-about" id="about">
		<h3 class="center">About Us </h3>
		<div class="container">
			<!-- <img src="images/about1.jpg" class="img-responsive" alt="about image" /> -->
			<!-- <h4>Lorem ipsum dolor sit amet</h4> -->
			<h4>We provide services for both customers and photographers.</h4>
			<h4>If you are a photographer, you can apply for a job on our website and get in touch with other photographers and their photos. You can also sell your own photos on the same community of photograpers.</h4>
			<h4>As a customer, you can search for a photographer and their category in any preferrable area. You can also buy stock images, visit the photographer's community or Upload and customize your photo.</h4>
			<h4>Picolex provides these 4 main features: </h4>
			<div class="skills-w3ls">
				<div class="skill">
					<h5>Search for a Photographer</h5>
					<p style="width:90%"><span>25<small>%</small></span></p>
				</div>
				<div class="skill">
					<h5>Photo Customization</h5>
					<p style="width:90%"><span>25<small>%</small></span></p>
				</div>
				<div class="skill">
					<h5>Photographer Community</h5>
					<p style="width:90%"><span>25<small>%</small></span></p>
				</div>
				<div class="skill">
					<h5>Stock Images</h5>
					<p style="width:90%"><span>25<small>%</small></span></p>
				</div>
			</div>
		</div>
	</div>
<!-- //about -->

<!--  gallery -->
		<div data-target="gallery" id="gallery">
            <div class="container">
				<div class="portfolio w3ls-section" id="port">

					<h3 class="center">Our Best Photos</h3>
					<ul class="simplefilter">
						<li class="active" data-filter="all" data-aos="slide-down">show all</li>
						<li data-filter="1" data-aos="slide-down">Wild</li>
						<li data-filter="2" data-aos="slide-down">Under Water</li>
					<li data-filter="3" data-aos="slide-down">Food</li>
					<li data-filter="4" data-aos="slide-down">Candid</li>
					<li data-filter="5" data-aos="slide-down">Landspace</li>
					</ul>
					<div class="scrollbar agileits-portfolio-scroll">
					<div class="filtr-container">

						<!--wild-->
							
							<?php

Include('connect.php');
$sql1 = "select *from admin_gallary where photo_type='wild'";
$res1=mysql_query($sql1);

$ranom =rand(80000,900000);
	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['image_copy'];
	echo"<div class='filtr-item gallery-t' data-category='1' data-sort='Busy streets'>
	
	<a href='images/admin_stock_image/$images' class='b-link-stripe b-animate-go thickbox'>
		<figure class='w3ls-gallery'>

		<img src='images/upload/admin/$images' class='img-responsive'/ width='auto'style='height: 136px;width:283px;'>	 

		<figcaption class='w3layouts-caption'>
											<h3>Wild</h3>
											<p>June 2017</p>
										</figcaption>
			 
		</figure>
		
	</a>
	
</div>";
	
}
?>

							
						<!-- Under water-->
						<?php

Include('connect.php');
$sql1 = "select *from admin_gallary where photo_type='underwater'";
$res1=mysql_query($sql1);

$ranom =rand(80000,900000);
	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['image_copy'];
	echo"<div class='filtr-item gallery-t' data-category='2' data-sort='Busy streets'>
	
	<a href='images/admin_stock_image/$images' class='b-link-stripe b-animate-go thickbox'>
		<figure class='w3ls-gallery'>

		<img src='images/upload/admin/$images' class='img-responsive'/ width='auto'style='height: 136px;width:283px;'>	 

		<figcaption class='w3layouts-caption'>
											<h3>Under Water</h3>
											<p>June 2017</p>
										</figcaption>
			 
		</figure>
		
	</a>
	
</div>";
	
}
?>
						<!-- food -->
						<?php

Include('connect.php');
$sql1 = "select *from admin_gallary where photo_type='food'";
$res1=mysql_query($sql1);

$ranom =rand(80000,900000);
	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['image_copy'];
	echo"<div class='filtr-item gallery-t' data-category='3' data-sort='Busy streets'>
	
	<a href='images/admin_stock_image/$images' class='b-link-stripe b-animate-go thickbox'>
		<figure class='w3ls-gallery'>

		<img src='images/upload/admin/$images' class='img-responsive'/ width='auto'style='height: 136px;width:283px;'>	 

		<figcaption class='w3layouts-caption'>
											<h3>food</h3>
											<p>June 2017</p>
										</figcaption>
			 
		</figure>
		
	</a>
	
</div>";
	
}
?>
<!-- candid-->
<?php

Include('connect.php');
$sql1 = "select *from admin_gallary where photo_type='candid'";
$res1=mysql_query($sql1);

$ranom =rand(80000,900000);
	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['image_copy'];
	echo"<div class='filtr-item gallery-t' data-category='4' data-sort='Busy streets'>
	
	<a href='images/admin_stock_image/$images' class='b-link-stripe b-animate-go thickbox'>
		<figure class='w3ls-gallery'>

		<img src='images/upload/admin/$images' class='img-responsive'/ width='auto'style='height: 136px;width:283px;'>	 

		<figcaption class='w3layouts-caption'>
											<h3>Candid</h3>
											<p>June 2017</p>
										</figcaption>
			 
		</figure>
		
	</a>
	
</div>";
	
}
?>
<!-- Landscape-->
<?php

Include('connect.php');
$sql1 = "select *from admin_gallary where photo_type='Landscape'";
$res1=mysql_query($sql1);

$ranom =rand(80000,900000);
	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['image_copy'];
	echo"<div class='filtr-item gallery-t' data-category='5' data-sort='Busy streets'>
	
	<a href='images/admin_stock_image/$images' class='b-link-stripe b-animate-go thickbox'>
		<figure class='w3ls-gallery'>

		<img src='images/upload/admin/$images' class='img-responsive'/ width='auto'style='height: 136px;width:283px;'>	 

		<figcaption class='w3layouts-caption'>
											<h3>Landscape</h3>
											<p>June 2017</p>
										</figcaption>
			 
		</figure>
		
	</a>
	
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


	<!-- Services -->
	<div class="agile-service" id="service">
		<div class="container">
			<div class="my-service">
				<div class="service-img">
					<img src="images/c1.jpg" alt="service-img" class="img-responsive" />
				</div>
				<div class="service-list">
					<h3>&nbsp;&nbsp;Our Services</h3>
					
					
					<div class="service-box1">
						<div class="box1">
							<h5>Search for a Photographer</h5>
							<p>Search or a photographer by choosing category and location</p>
							<a href="#" data-toggle="modal" data-target="#myModal1">View Details</a>
								<!-- bootstrap-pop-up -->
								<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" >
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												Search for a Photographer
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<section>
												<div class="modal-body">
													<img src="images/search.jpg" alt=" " class="img-responsive" />
													<p>You can choose a photographer by viewing sample photos and filtering using nearest location and/or category of specialization. Click here to &nbsp;&nbsp;<a href="cust_login.php">Log in</a></p>
												</div>
											</section>
										</div>
									</div>
								</div>
							<!-- //bootstrap-pop-up -->
						</div>

						<div class="box1">
							<h5>Photo Customization</h5>
							<p>Upload a photo and choose from options like Frames, Keychains, Cups, etc. </p>
							<a href="#" data-toggle="modal" data-target="#myModal2">View Details</a>
								<!-- bootstrap-pop-up -->
								<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												Photo Customization
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
											</div>
											<section>
												<div class="modal-body">
													<img src="images/customize.jpg" alt=" " class="img-responsive" />
													<p>You can upload any photo at your disposal and use the options we provide like frames, keychains, cups, calendars, scrapbooks, canvas, etc. Click here to &nbsp;&nbsp;<a href="cust_login.php">Log in</a></p>
												</div>
											</section>
										</div>
									</div>
								</div>
							<!-- //bootstrap-pop-up -->
						</div>
					</div>

					<div class="service-box2">
						<div class="box1">
							<h5>Photographers' Community</h5>
							<p>A social place where all photographers can post, comment, like and sell their photos. </p>
							<a href="#" data-toggle="modal" data-target="#myModal3">View Details</a>
								<!-- bootstrap-pop-up -->
								<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" >
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												Photographers' Community
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
											</div>
											<section>
												<div class="modal-body">
													<img src="images/community.jpg" alt=" " class="img-responsive" />
													<p>This Photographers' Community can be a social place for all registered photoraphers. They can post their favourite photos and apply a price tag. Both customers and photographers can comment and like the photos. Customers can buy these photos from the photographers. Click here to &nbsp;&nbsp;<a href="cust_or_photo2.php">Log in</a></p>
												</div>
											</section>
										</div>
									</div>
								</div>
						</div>

						<div class="box1">
							<h5>Stock Images</h5>
							<p>You can buy uniquely made stock images and own it. No one can have the same image once you bought it.</p>
							<a href="#" data-toggle="modal" data-target="#myModal4">View Details</a>
								<!-- bootstrap-pop-up -->
								<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" >
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												Stock Images
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
											</div>
											<section>
												<div class="modal-body">
													<img src="images/stock.jpg" alt=" " class="img-responsive" />
													<p>Stock Images are made by Picolex team and cannot be found anywhere else. Due to this uniqueness, photos you buy from here are only owned buy you. No two people can have the same stock image. Click here to &nbsp;&nbsp;<a href="cust_login.php">Log in</a></p></p>
												</div>
											</section>
										</div>
									</div>
								</div>
						</div>
					</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Services -->
	
	
		<div class="footer">
			<div class="container">
				<div class="menu">
					<ul class="list">
						<li><a class="scroll" href="#home">Home</a></li>
						<li><a class="scroll" href="#about">About</a></li>
						<li><a class="scroll" href="#gallery">Gallery</a></li>
						<li><a class="scroll" href="#service">Services</a></li>
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

