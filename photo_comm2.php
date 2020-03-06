

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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/disbleclick.js"></script>
</head>
<body>
	<div class="banner" id="home">
		<div class="navbar navbar-default w3ls-navbar" style="background-color: #5caceb;border-color: #5caceb;padding: 10px 0px;margin-bottom: 0px;border-radius: 0px;">
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
							<li><a href="my_photos.php"><span>My Photos</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
			

		</div>
		
				



<div class="container">
  <h2>PHOTOGRAPHY COMMUNITY</h2>
 <br>

<?php 
 if(isset($_POST['like'])){
$like = $_POST['lik'];
$idp  = $_POST['idp'];
$userCu = $_SESSION["photo_email"];

Include('connect.php');

$sql = "select likes from photo_cum where images='$idp'";
$res=mysql_query($sql);
while($row=mysql_fetch_assoc($res)){
	$likeC = $row['likes'] + $like;

	if(!empty($likeC)){
		$sql1 = "update photo_cum set likes='$likeC' where images='$idp'";
		$res1=mysql_query($sql1);
		$sql = "insert into likes(image,user_name,likes) values('$idp','$userCu',$like)";
		$res = mysql_query($sql);
		//echo"<meta http-equiv='refresh' content='0'>";
		if($res1 && $res){

		//header('location:photo_comm.php');
		
		}
	}
	
}


 }

 if(isset($_POST['sen'])){
	$comments = $_POST['comment'];
	$comC = $_POST['comments'];
	$idp  = $_POST['idpp'];
	$userCu = $_SESSION["photo_email"];
	
	Include('connect.php');
	
	$sql = "select comments from photo_cum where images='$idp'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_assoc($res)){
		$commentsC = $row['comments'] + $comC;
	
		if(!empty($commentsC)){
			$sql1 = "update photo_cum set comments='$commentsC' where images='$idp'";
			$res1=mysql_query($sql1);

			$sql = "insert into comments (image_name,comment,user_name) values('$idp','$comments','$userCu')";
			$res = mysql_query($sql);
			//echo"<meta http-equiv='refresh' content='0'>";
			
			
			if($res1 && $res){
	
			header('location:photo_comm.php');
			
			}
		}
		
	}
	
	
	 }
 //mysql_close($con);
 ?>
 <?php

Include('connect.php');
$sql1 = "select *from photo_cum";
$res1=mysql_query($sql1);


	
//
while($row=mysql_fetch_assoc($res1)){
	$images = $row['images'];
	$liks=$row['likes'];
	$commC=$row['comments'];
    $nameP = $row['photog_email'];
	
	
	echo "<div class='card bg-light text-dark' style='text-align:center;background: #5caceb; padding:15px;'>
	<h4 style='text-align:left;opacity:0.5'>$nameP</h4>
	<div class='card-body'><img src='images/upload/photoG/$images' width='auto' height='500'>
	<br><br>
	<form method='post'>
	<input type='hidden' name='lik' value='1'>
	<input type='hidden' name='idp' value='$images'>
	<button name='like' class='btn btn-primary' type='submit'>
	<span class='glyphicon glyphicon-thumbs-up'></span> Like + $liks
  </button>
</form><br>
<form method='post'>
	<input type='text' name='comment' required>
	<input type='hidden' name='comments' value='1'>
	<input type='hidden' name='idpp' value='$images'>
	<button class='btn btn-primary' type='submit' name='sen'><span class='glyphicon glyphicon-comment'></span> Comment + $commC</button>
</form>
<div class='container'>


<a href='comments.php?image=$images' type='button' class='btn btn-info' style='position:relative;float:right; right:50px;'>View Details</a>



</div>
	<br><br>
	</div>
	
  </div><br>";
  
	  
	  
 
}
mysql_close($con);
 ?>


  
  <br>
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

