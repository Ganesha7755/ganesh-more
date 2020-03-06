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
		

<?php
if(isset($_FILES['image'])){
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submitP"])) {
		$ptype = $_POST['typep'];
		//$style="position: relative;top: -259px;";
$puser = $_SESSION["photo_email"];
		$target_dir = "images/upload/photoG/";
		
		//$random = 'fream';
	$target_file = $target_dir.$_FILES["image"]["name"];
	$user=rand(100000,900000);
	$extension = explode("/", $_FILES["image"]["type"]);
	
	  $name=$user.".".$extension[1];
	  //echo $name;
     $tmp=$_FILES["image"]["tmp_name"];
    
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["image"]["tmp_name"]);
		if($check !== false) {
			//echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($tmp, "images/upload/photoG/" . $user.".".$extension[1])) {


			function watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile) { 

global $name;
global $puser;
global $ptype; 
				list($width, $height) = getimagesize($SourceFile);
				$image_p = imagecreatetruecolor($width, $height);
				$image = imagecreatefromjpeg($SourceFile);
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height); 
				$black = imagecolorallocate($image_p, 0, 0, 0);
				$font = 'fonts/Roboto-Black.ttf';
				$font_size = 18; 
				imagettftext($image_p, $font_size, 0, 10, 20, $black,$font,$WaterMarkText);
				if ($DestinationFile<>'') {
				   imagejpeg ($image_p, $DestinationFile, 100); //clearity set
				} else {
				   header('Content-Type: image/jpeg');
				   imagejpeg($image_p, null, 100);
				};
				imagedestroy($image); 
				imagedestroy($image_p); 

				Include('connect.php');
				$sql1 = "INSERT INTO photo_cum (images,image_copy,types,photog_email) VALUES ('$name','$name','$ptype','$puser')";
				$res1=mysql_query($sql1);
				if($res1){
				echo "done";
				}

			 };

			$SourceFile = 'images/upload/photoG/'.$name;
			$DestinationFile = 'images/waterapply/'.$name; 
			$WaterMarkText = 'Copyright picolex.com';
			watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);
		
	
		
	
		
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}

   ?>


	
	<!-- contact -->
	<div class="w3-contact" id="contact">

		<h3 class="center">Upload Your Photo</h3>

		<table align="center" width="80%">

			<tr align="center">
				<td>
							<br><br><br>
							<form action="" enctype="multipart/form-data" method="post">
							<select name="typep">
							<option>Wild</option>
							<option>Food</option>
							<option>Candid</option>
							<option>Landscape</option>
							<option>underwater</option>
							</select>
							<br>
							  <input  type="file" name="image" class="filess" required alt='Upload a Photo'/><br><br>
							  <input type="submit" value="Upload" name="submitP"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <br><br><br><br><br><br><br><br><br>
							</form>
				</td>
			</tr>
				
		</table>

		<br>


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


