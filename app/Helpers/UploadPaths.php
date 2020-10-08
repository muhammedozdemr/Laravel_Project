<?php 

namespace App\Helpers;


class UploadPaths
{
	public static $uploadPaths = array(
	'film_images' => '/uploads/films',
	'ayar_images' => '/uploads/films',
	'profile_photos'  => '/uploads/profiles'
	);

	public static function getUploadPath($path)
	{
		return public_path().self::$uploadPaths[$path];
	}
}