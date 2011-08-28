<?php

/* CONFIG */
$skinurl = 'http://s3.amazonaws.com/MinecraftSkins/'; //Where to download the full skins.
$cachedAvatars = '10'; //En heures 
$cachepath = 'media/avatars/'; // Where to store cached copies.
$timeout = 2; // Timeout for fetching a skin png from minecraft.net. Needed if their servers die.

/* END CONFIG */

function fallback() 
{
	header('Content-Type: image/png');
	readfile('media/avatars/default.png');
	exit();
}

if(isset($_GET['nick'])) 
{
	$nick = $_GET['nick'];
	$cachedpng = $cachepath.$nick.'.png';
	$skinurl = $skinurl.$nick.'.png';
  	$old = ini_set('default_socket_timeout', $timeout);
  	
	if (file_exists($cachedpng) && filemtime($cachedpng) >= (time() - ($cachedAvatars * 3600))) 
	{
		
		header('Content-Type: image/png');
		readfile($cachedpng);
		
		exit();
	
	} 
	elseif ($file = @fopen($skinurl, "r")) 
	{
		
		$src = @imagecreatefrompng($skinurl)
			or fallback();
		$dest = imagecreatetruecolor(24, 24);
		
		imagecopyresized($dest, $src, 0, 0, 8, 8, 24, 24, 8, 8);
		
		header('Content-Type: image/png');
		imagepng($dest);
		
		if($cachedAvatars != 0)
			imagepng($dest,$cachedpng);
		
		imagedestroy($dest);
		imagedestroy($src);
		
		exit();
		
	}
	
	ini_set('default_socket_timeout', $old); 
	
} 
elseif (isset($_GET['clearcache'])) 
{
	$mask = $cachepath.'*.png';
   	array_map( 'unlink', glob( $mask ) );   	
   	echo 'Cache clear: DONE';   	
   	exit();

}

// On error or no input:
fallback();
	
?>