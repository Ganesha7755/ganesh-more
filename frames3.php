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
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/html2canvas.js" type="text/javascript"></script>
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
							<li><a href="frames.php"><span>Frames</span></a></li>
						</ul>

					</div>
					</div>
				</div>
				
			</div>
			

		</div>
		



	
	
	<!-- contact -->
	<div class="w3-contact" id="contact">

		<h3 class="center">Upload a Photo</h3>

		<!--<table align="center" width="80%">

			<tr align="center">
				<td><img src="images/frames/3.png" alt="Image Not Available" style="width:250px;height:300px;"></td>
			</tr>

			<tr align="center">
				<td><label></label>
							<br>
							<form action="frames_action.php" method="post" enctype="multipart/form-data">
							  <input name="file" type="file" id="file" class="filess" required alt='Upload a Photo'/><br>
							  <input type="submit" value="Upload" id="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							 
							</form>
				</td>
			</tr>
				
		</table>-->
		
   <?php
if(isset($_FILES['image'])){
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {

		$style="position: relative;top: -259px;";

		$target_dir = "images/upload/frames/";
		//$random = 'fream';
	$target_file = $target_dir.$_FILES["image"]["name"];
	$user="frames";
	$extension = explode("/", $_FILES["image"]["type"]);
	
      $name=$user.".".$extension[1];
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
		if (move_uploaded_file($tmp, "images/upload/frames/" . $user.".".$extension[1])) {
			//echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}

   ?>

		<br>
		<div class="container" style="text-align:center;" >
		
		<div> 
		<h4>Please Select Photo:</h4>
		<div id="save"> 
		<img src="images/frames/3.png" alt="Image Not Available" id="show" style="width:350px;height:400px;">
		
		<?php
		if(isset($_POST['submit'])){
			echo '<div>
			<img src="images/upload/frames/frames.jpeg" alt="Image Not Available" style="width: 270px;height: 290px;position: relative;top: -345px;">
			</div>';
		}
		
		?>
		</div>
		
		
		</div>
		
		<!--<div class="canvas__container">
  <canvas id="cnvs" class="canvas__canvas"></canvas>
  <img src="images/frames/3.png" id="mirror" class="canvas__mirror" />
</div>-->
	

	<form action="" method="post" enctype="multipart/form-data" class="form-default" style="<?php global $style; echo $style ?>">
   <br>
		<div style="text-align:center;width:50px;position:relative;margin-left:39%;">

    <input type="file" name="image" id="image">
	
		</div>
		<br>
	<input type="submit" value="Upload Image" id="up" name="submit" >
	<input type="button" class="preview" value="preview" onclick="save()" id="send">
	
	
	<!--<a id="btn-Convert-Html2Image" href="#">Download</a>-->
	</form>
	<?php
if(isset($_POST['payment']))
{
	Include('connect.php');
	$image = $_POST['im'];
	$user = $_SESSION["cust_email"];
	$decode = base64_decode($image);

	$rand = rand(1000,5000);

	file_put_contents('images/upload/frames/'."$rand".".png",$decode);

	$sql ="select *from customer_reg where cust_email='$user'";
	
	$res=mysql_query($sql);
	
	while($row=mysql_fetch_assoc($res)){
		$name = $row['cust_fname'];
		$email = $row['cust_email'];
		$con=$row['cust_mobile'];

		$sql1 = "INSERT INTO custum_photo (cust_name, cust_email, cust_con, photo) VALUES ('$name','$email','$con','$rand')";
		$res1=mysql_query($sql1);
		if($res1){
			echo "done";
		}
	}

	
}
		?>
	<form method="post">
	
	<input type="hidden" id="data" name="im">
	<button type="submit" name="payment">Save</button>
	</form>
	<div id="preview" style="display:none;">
	
	</div>
		</div>
<script>
		
		var element = $("#save"); // global variable
var getCanvas; // global variable

    $("#send").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#preview").append(canvas);
                getCanvas = canvas;

				var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
	var len = newData.length - 37;

	var new2=newData.substring(37,len);
	
	console.log(newData);
	document.getElementById("data").value=new2;
             }
         });
		 
	});
	
	//download
	var date = new Date();

	$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
	console.log(newData);
	document.getElementById("data").value=newData;
    $("#btn-Convert-Html2Image").attr("download", date +" "+".png").attr("href", newData);
});
		</script>


<!--<div id="html-content-holder" style="background-color: #F0F0F1; color: #00cc65; width: 500px;
        padding-left: 25px; padding-top: 10px;">
        <strong>Codepedia.info</strong><hr />
        <h2 style="color: #3e4b51;">
            Html to canvas, and canvas to proper image
        </h2>
        <p style="color: #3e4b51;">
            <b>Codepedia.info</b> is a programming blog. Tutorials focused on Programming ASP.Net,
            C#, jQuery, AngularJs, Gridview, MVC, Ajax, Javascript, XML, MS SQL-Server, NodeJs,
            Web Design, Software</p>
        <p style="color: #3e4b51;">
            <b>html2canvas</b> script allows you to take "screenshots" of webpages or parts
            of it, directly on the users browser. The screenshot is based on the DOM and as
            such may not be 100% accurate to the real representation as it does not make an
            actual screenshot, but builds the screenshot based on the information available
            on the page.
        </p>
    </div>
    <input id="btn-Preview-Image" type="button" value="Preview" />
    <a id="btn-Convert-Html2Image" href="#">Download</a>
    <br />
    <h3>Preview :</h3>
    <div id="previewImage">
    </div>


		
		</div>-->

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

