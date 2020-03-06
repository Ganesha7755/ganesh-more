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
<style>
.rowg {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.columng {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.columng img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .columng {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .columng {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}




</style>
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
		
	
	<!-- contact -->
	<div class="w3-contact" id="contact">
		<div class="container contact1">
			<h3 class="center">Our Best Photos</h3>
			<form  method="post" align="center">
				<div class="sect2">
					<div class="details1">
						
						
							
							<br>

							
							
                            <?php
								Include('connect.php');
                        $id = $_GET['id'];
                        $cat =$_GET['cat'];
                        $email=$_GET['email_id'];
                        
                        $list=array();    
                        $sql = "select best_five_p from photographer_reg where photo_email='$email'";
								$res = mysql_query($sql);
                                echo"<div class='rowg'>"; 
								while($row=mysql_fetch_assoc($res)){
                                    $list[]=$row['best_five_p'];
                                    

                                    $source = explode("|", $list[0]);
//echo count($source);
for($i = 0; $i < count($source); $i++){
    //echo "$source[$i]";
    
    
  echo"  <div class='columng'>
      <img src='best_five/$source[$i]' style='width:100%'>
    </div>
    
  
  ";
  
    
  
  
	//echo "<img height='100%' width='20%' src='user_data/$source[$i]'/>";
}
									//echo "<option value='$list'>$list[0]</option>";
                                    }
                                    echo"</div>";
							  ?>
							
						
					
					</div>
					
					
				</div>
			<!-- <input type="submit" value="Search"><br> -->
			
			<!-- <a href='cust_photo_list.php'><h2>Search</h2></a> -->
			<br>
			</form>
		</div>
		<div class="container">
		<div>
		<?php

		if(isset($_POST['search'])){
           Include 'cust_photo_list.php';
		}
		 
		 ?>
		</div>
		
		</div>
        <html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learning Advance</title>
</head>
<body>
	
</body>
</html>


	<br>
    <br><br>
    <br><br> 	
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