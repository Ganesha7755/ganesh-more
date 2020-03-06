<?php
session_start();

Include('connect.php');
$cust_email=$_POST['cust_email'];
$cust_pass=$_POST['cust_pass'];

$cust_email=stripcslashes($cust_email);
$cust_pass=stripcslashes($cust_pass);
$cust_email=mysql_real_escape_string($cust_email);
$cust_pass=mysql_real_escape_string($cust_pass);


$result=mysql_query("select * from customer_reg where cust_email='$cust_email' and cust_pass ='$cust_pass'");

$row= mysql_fetch_array($result);

if($row['cust_email'] == $cust_email && $row['cust_pass']== $cust_pass)
{
	$_SESSION["cust_email"]=$cust_email;

	header('location:cust_home.php');

	echo "<script language='javascript' type='text/javascript'>
			window.location= 'cust_home.php'; </script>";
}
else
{
	echo "<script language='javascript' type='text/javascript'>
			window.location= 'cust_login.php'; 
			alert('Invalid Combination of Username and Password');
			</script>";
	
}

?>