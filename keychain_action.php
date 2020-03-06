<?php


$post_photo=$_FILES['file']['name'];
$post_photo_tmp=$_FILES['file']['tmp_name'];

$ext=pathinfo($post_photo,PATHINFO_EXTENSION);

if($ext=='png' || $ext=='PNG'
	|| $ext=='jpg' || $ext=='jpeg'
	|| $ext=='JPG' || $ext=='JPEG'
	|| $ext=='gif' || $ext=='GIF')
{
	if($ext=='jpg' || $ext=='jpeg' || $ext=='JPG' || $ext=='JPEG')
	{
		$src=imagecreatefromjpeg($post_photo_tmp);
	}
	if($ext=='PNG' || $ext=='png')
	{
		$src=imagecreatefromjpeg($post_photo_tmp);
	}
	if($ext=='gif' || $ext=='GIF')
	{
		$src=imagecreatefromjpeg($post_photo_tmp);
	}
	list($width_min,$height_min)=getimagesize($post_photo_tmp);
	$newwidth_min=350;
	$newheight_min=($height_min/$width_min) * $newwidth_min;
	$tmp_min=imagecreatetruecolor($newwidth_min, $newheight_min);
	imagecopyresampled($tmp_min,$src,0,0,0,0,$newwidth_min, $newheight_min,$width_min,$height_min);
	imagejpeg($tmp_min,"keychains/".$post_photo,80);
}

?>

<?php 
	   echo "<script language='javascript' type='text/javascript'>
	   window.location= 'payment.php'; 
	   alert('Photo Uploaded Successfully');</script>";
?>