<?php
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('2.png');
$im = imagecreatefromjpeg('1.jpg');

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 400;
$marge_bottom = 400;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// Output and free memory
header('Content-type: image/jpg');
imagejpeg($im);
imagedestroy($im);

?>