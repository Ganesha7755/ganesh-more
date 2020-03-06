<?php 


	Include('connect.php');

	session_start();
	if($_SESSION["cust_email"]==true)
	{}
	else
	{
		header('location:search_photo.php');
	}
							
	

$user = $_SESSION['cust_email'];
$poto_id = $_GET['id'];
$poto_cat = $_GET['cat'];
$poto_email = mysql_real_escape_string($_GET['email_id']);

$selectSQL = "SELECT * FROM customer_reg WHERE cust_email = '$user'";
	$selectRes = mysql_query( $selectSQL );
	while($row=mysql_fetch_assoc($selectRes)){
		$cust_fname = $row['cust_fname'];
		$cust_mobile = $row['cust_mobile'];
		$cust_email = $row['cust_email'];
		$cust_area = $row['cust_area'];
		$cust_city = $row['cust_city'];
		$cust_state = $row['cust_state'];
		$cust_pin = $row['cust_pin'];


		$sql="INSERT INTO notifi_cust(photo_id,photo_cat,photo_user,notifi_fname,notifi_mob,notifi_email,notifi_area,notifi_city,notifi_state,notifi_pin)
		VALUES
		('$poto_id','$poto_cat','$poto_email','$cust_fname','$cust_mobile','$cust_email','$cust_area','$cust_city','$cust_state','$cust_pin');";
	
		if (!mysql_query($sql,$con))
		  {
			  die('Error: ' . mysql_error());
		  }
		else
		{
		
			echo "<script language='javascript' type='text/javascript'>
			window.location= 'search_photo.php'; 
			alert('Photographer Confirmed');</script>";
	
		}
	
	
		mysql_close($con);


	}

	

	
	

	

?>