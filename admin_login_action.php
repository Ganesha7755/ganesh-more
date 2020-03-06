<?php
session_start();

Include('connect.php');
$user_name=$_POST['user_name'];
$user_pass=$_POST['user_pass'];

$user_name=stripcslashes($user_name);
$user_pass=stripcslashes($user_pass);
$user_name=mysql_real_escape_string($user_name);
$user_pass=mysql_real_escape_string($user_pass);


$result=mysql_query("select * from admin where user_name='$user_name' and user_pass ='$user_pass'");

$row= mysql_fetch_array($result);

if($row['user_name'] == $user_name && $row['user_pass']== $user_pass)
{
	$_SESSION["user_name"]=$user_name;

	header('location:admin_home.php');

	echo "<script language='javascript' type='text/javascript'>
			window.location= 'admin_home.php'; </script>";
}
else
{
	echo "<script language='javascript' type='text/javascript'>
			window.location= 'admin.php'; 
			alert('Invalid Combination of Username and Password');
			</script>";
	
}

?>