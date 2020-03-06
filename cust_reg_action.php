<?php 


	Include('connect.php');

	$cust_fname = $_POST['cust_fname'];
	$cust_mobile = $_POST['cust_mobile'];
	$cust_email = $_POST['cust_email'];
	$cust_pass = $_POST['cust_pass'];
	$cust_cpass = $_POST['cust_cpass'];
	$cust_area = $_POST['cust_area'];
	$cust_city = $_POST['cust_city'];
	$cust_state = $_POST['cust_state'];
	$cust_pin = $_POST['cust_pin'];

	$sql="INSERT INTO customer_reg
	(cust_fname,
	cust_mobile,
	cust_email,
	cust_pass,
	cust_cpass,
	cust_area,
	cust_city,
	cust_state,
	cust_pin
	)
	VALUES
	(
	'$cust_fname',
	'$cust_mobile',
	'$cust_email',
	'$cust_pass',
	'$cust_cpass',
	'$cust_area',
	'$cust_city',
	'$cust_state',
	'$cust_pin'
	);";

	if (!mysql_query($sql,$con))
  	{
  		die('Error: ' . mysql_error());
  	}
	else
	{
	
		echo "<script language='javascript' type='text/javascript'>
		window.location= 'cust_login.php'; 
		alert('Account Created Successfully');</script>";

	}


	mysql_close($con);

?>