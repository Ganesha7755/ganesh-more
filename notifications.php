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

		<h3 class="center">Notifications</h3>

		<style>
			table 
			{
			    font-family: arial, sans-serif;
			    border-collapse: collapse;
			    width: 90%;
			}

			th 
			{
			    border: 2px solid #000000;
			    padding: 8px;
			    font-size: 20px;
			    text-align: center;
			}

			td
			{
				border: 2px solid #000000;
				font-size: 17px;
				text-align: center;
				padding: 6px;
			}

			
		</style>
		

		<?php

	Include('connect.php');
	$user = $_SESSION['photo_email'];
    $selectSQL= "SELECT * FROM notifi_cust where photo_user ='$user'";
   
 
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }
  else
  {
    ?>
<table border="2" align="center">
  <thead>
    <tr>
      <th>ID</th>
	  <th>Photo ID</th>
	  <th>Photo Category</th>
      <th>Full Name</th>
      <th>Mobile</th>
      <th>Email</th>
      <th>Area</th>
      <th>City</th>
      <th>State</th>
      <th>Pincode</th>
      <th>Decision</th>
    </tr>
  </thead>
  <tbody>
    <?php


      if(mysql_num_rows( $selectRes ) == 0 )
      {
           echo '<tr><td colspan="9">No Match Found</td></tr>';
      }
      else
      {
          while( $row = mysql_fetch_assoc( $selectRes ) )
          {
				 
			$id=$row['photo_id'];
			$cat=$row['photo_cat'];
			$cust_n=$row['notifi_fname'];
			$cust_m =$row['notifi_mob'];
			echo "<tr>
							  <td>{$row['notifi_id']}</td>
							  <td>{$row['photo_id']}</td>
							  <td>{$row['photo_cat']}</td>
			          		<td>{$row['notifi_fname']}</td>
			          		<td>{$row['notifi_mob']}</td>
			          		<td>{$row['notifi_email']}</td>
			          		<td>{$row['notifi_area']}</td>
			          		<td>{$row['notifi_city']}</td>
			          		<td>{$row['notifi_state']}</td>
			          		<td>{$row['notifi_pin']}</td>
			  				<td><form method='post'>
			  					
			  					<br>
			  					<a href='notifications_done.php?id=$id&cat=$cat&custn=$cust_n&custm=$cust_m'>Accept</a>
			  					/
			  					<a href='notification_del.php?id=$id'>Reject</a>
			  					</form><br></td>
		          		</tr>";
          }
      }
   ?>

  </tbody>
</table>

<?php
 
 }

?>
<br><br><br><br><br><br><br><br><br><br><br><br>

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

