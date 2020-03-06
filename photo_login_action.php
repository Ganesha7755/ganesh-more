<?php
session_start();

Include('connect.php');
$photo_email=$_POST['photo_email'];
$photo_pass=$_POST['photo_pass'];

$photo_email=stripcslashes($photo_email);
$photo_pass=stripcslashes($photo_pass);
$photo_email=mysql_real_escape_string($photo_email);
$photo_pass=mysql_real_escape_string($photo_pass);


$result=mysql_query("select * from photographer_reg where photo_email='$photo_email' and photo_pass ='$photo_pass'");

$row= mysql_fetch_array($result);

if($row['photo_email'] == $photo_email && $row['photo_pass']== $photo_pass)
{
	$_SESSION["photo_email"]=$photo_email;

	header('location:photo_home.php');

	echo "<script language='javascript' type='text/javascript'>
			window.location= 'photo_home.php'; </script>";
}
else
{
	echo "<script language='javascript' type='text/javascript'>
			window.location= 'photo_login.php'; 
			alert('Invalid Combination of Username and Password');
			</script>";
	
}

?>