<?php  

$main_img       = "images/marriages/1.jpg"; // main big photo / picture
$watermark_img  = "1234.png"; // use GIF or PNG, JPEG has no tranparency support
$padding        = 10; // distance to border in pixels for watermark image
$opacity        = 30;  // image opacity for transparent watermark
$filename = "ram";
$watermark  = imagecreatefrompng($watermark_img); // create watermark
$image      = imagecreatefromjpeg($main_img); // create main graphic

if(!$image || !$watermark) die("Error: main image or watermark could not be loaded!");


$watermark_size     = getimagesize($watermark_img);
$watermark_width    = $watermark_size[0.5];  
$watermark_height   = $watermark_size[1];  

$image_size     = getimagesize($main_img);  
$dest_x         = $image_size[0.5] - $watermark_width - $padding;  
$dest_y         = $image_size[1] - $watermark_height - $padding;


// copy watermark on main image
imagecopymerge($image, $watermark, $dest_x, $dest_y, 1, 1, $watermark_width, $watermark_height, $opacity);

$filename = '/image/upload/bar.png'; 
// print image to screen
header("content-type: image/jpeg"); 
 
imagejpeg($image);  
imagedestroy($image);  
imagedestroy($watermark); 



?>