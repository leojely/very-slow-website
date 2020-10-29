<?php
header('Cache-Control: no-cache, no-store, must-revalidate');	//	No Cacheing
header('Pragma: no-cache');	//	No Cacheing
header('Expires: 0');	//	No Cacheing
header("Content-type: image/webp");
ob_end_flush(); // Stop buffer
ob_implicit_flush(1); // Implicit flush at each output command

$filename = "image.webp";
$handle   = fopen($filename, "rb");
$fsize    = filesize($filename);

for($n = 0; $n < $fsize; $n++)
{
	echo fread($handle, 1);
	usleep(  40000);
}
