<?php

namespace App\Services;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageService
{
	private static $maxW = 1000;
	private static $maxH = 1000;
    private static $storageDirectory = 'public/images/';

	/**
	 * @param UploadedFile|string $file
	 *
	 * @return string
	 * @throws \InvalidArgumentException
	 */
    public static function create($file) : string
    {
	    if ($file instanceof UploadedFile) {
		    $filename = md5(microtime()) . '.' . $file->extension();
	    } else if (is_string($file) && file_exists($file)) {
    		$filename = basename($file);
	    } else {
		    throw new \InvalidArgumentException('File must be "Illuminate\Http\UploadedFile" or "string (path to file)"');
	    }

        Image::make($file)->resize(self::$maxW, self::$maxH, function ($constrain) {
        	$constrain->aspectRatio();
        	$constrain->upsize();
        })->save(storage_path('app/') . self::$storageDirectory . $filename);

        return $filename;
    }

	/**
	 * @param string $filename
	 *
	 * @return array|null
	 */
	public static function getUrls(string $filename)
    {
    	if (!Storage::has(self::$storageDirectory . $filename)) {
    		return null;
	    }

	    return [
	    	'large' => url('imagecache/large/' . $filename),
	    	'small' => url('imagecache/small/' . $filename),
	    ];
    }

	/**
	 * @param string $filename
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public static function removeFile(string $filename)
    {
        if (!Storage::has(self::$storageDirectory . $filename)) {
        	throw new \Exception('File does not exist');
        }

	    return Storage::delete(self::$storageDirectory . $filename);
    }
}