

<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->	
	<!-- contact -->
	<div class="w3-contact" id="contact">
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

    $select_area = $_POST['select_area'];
    $select_category = $_POST['select_category'];

    
	if($select_area=='all')
    { 
    	$selectSQL= "SELECT * FROM photographer_reg where photo_area = '$select_category'";

	}else if($select_category=='all'){
		$selectSQL= "SELECT * FROM photographer_reg where photo_area = '$select_area'";
	}else if(!empty($select_category) && !empty($select_area)){
		$selectSQL= "SELECT * FROM photographer_reg where photo_area = '$select_area' AND photo_cat='$select_category'";
	}
    
    
   //echo $selectSQL;
 
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
      <th>Category</th>
      <th>State</th>
      <th>City</th>
      <th>Area</th>
      <th>Pincode</th>
      <th>Camera</th>
      <th>Experience</th>
      <th>Confirmation</th>
	  <th>View Images</th>
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
		$name=mysql_real_escape_string($row['photo_email']);
		$state=$row['photo_state'];
		$city=$row['photo_city'];
		$area=$row['photo_area'];
		$pin=$row['photo_pin'];
		$cam=$row['photo_cam'];
		$exp=$row['photo_exp'];
			
         		 echo "<tr>
			          		<td>{$row['photo_id']}</td>
			          		<td>{$row['photo_cat']}</td>
			          		<td>{$row['photo_state']}</td>
			          		<td>{$row['photo_city']}</td>
			          		<td>{$row['photo_area']}</td>
			          		<td>{$row['photo_pin']}</td>
			          		<td>{$row['photo_cam']}</td>
			          		<td>{$row['photo_exp']}</td>
			          		<td><a href='photo_confirmed.php?id=$id&cat=$cat&email_id=$name' class='btn btn-primary'>Confirm</a></td>
			          		<td><a href='photoG_photos.php?id=$id&cat=$cat&email_id=$name' class='btn btn-primary'>View Photos</a></td>

		          		</tr>";
          }
      }
   ?>

  </tbody>
</table>

<?php
 
 }

?>
		
<br><br>

	
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

