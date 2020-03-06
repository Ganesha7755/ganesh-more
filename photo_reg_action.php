<?php 


	Include('connect.php');

	$photo_fname = $_POST['photo_fname'];
	$photo_mob = $_POST['photo_mob'];
	$photo_city = $_POST['photo_city'];
	$photo_state = $_POST['photo_state'];
	$photo_pin = $_POST['photo_pin'];
	$photo_email = $_POST['photo_email'];
	$photo_pass = $_POST['photo_pass'];
	$photo_cpass = $_POST['photo_cpass'];
	$photo_cat = $_POST['photo_cat'];
	$photo_area = $_POST['photo_area'];
	$photo_cam = $_POST['photo_cam'];
	$photo_exp = $_POST['photo_exp'];

	$profile =$_FILES['pic']['name'];
	$temp = $_FILES['pic']['tmp_name'];
 
	$imageData = array();
	
		$errors= array();
		foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
			$file_name = $key.$_FILES['files']['name'][$key];
			$file_tmp =$_FILES['files']['tmp_name'][$key];
			
			
			array_push($imageData, $file_name);
		   
			$desired_dir="best_five";
			if(empty($errors)==true){
				if(is_dir($desired_dir)==false){
					mkdir("$desired_dir", 0700);		// Create directory if it does not exist
				}
				if(is_dir("$desired_dir/".$file_name)==false){
					move_uploaded_file($file_tmp,"best_five/".$file_name);
					move_uploaded_file($temp,"photographer_profile/".$profile);
				}else{									//rename the file if another one exist
					$new_dir="best_five/".$file_name.time();
					 rename($file_tmp,$new_dir) ;				
				}
						
			}else{
					print_r($errors);
			}
		}
		if(empty($error)){
			
			$imgDt = implode("|", $imageData);
			 
			
			
			
	$sql="INSERT INTO photographer_reg
	(photo_fname,
	photo_mob,
	photo_city,
	photo_state,
	photo_pin,
	photo_email,
	photo_pass,
	photo_cpass,
	photo_cat,
	photo_area,
	photo_cam,
	photo_exp,
	profile_photo,
	best_five_p
	)
	VALUES
	(
	'$photo_fname',
	'$photo_mob',
	'$photo_city',
	'$photo_state',
	'$photo_pin',
	'$photo_email',
	'$photo_pass',
	'$photo_cpass',
	'$photo_cat',
	'$photo_area',
	'$photo_cam',
	'$photo_exp',
	'$profile',
	'$imgDt'
	);";

	if (!mysql_query($sql,$con))
  	{
  		die('Error: ' . mysql_error());
  	}
	else
	{
	
		echo "<script language='javascript' type='text/javascript'>
		window.location= 'photo_login.php'; 
		alert('Account Created Successfully');</script>";

	}
		}
	
	




	mysql_close($con);

?>