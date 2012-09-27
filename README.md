# Dailymotion Cloud

## Installation

### Aritsan

	php artisan bundle:install dmcloud

### Bundle Registration

Add the following to your **application/bundles.php** file:

	'dmcloud' => array('auto' => true),

## Configuration


Move the **config/dmcloud.php** to the **application** folder and add the following to your **application/config/dmcloud.php** file:
	
	return array(
	'user_id' => 'YOUR USER ID',
	'api_key' => 'YOUR API KEY',
	
);

	
## Usage

	$cloudkey = IoC::resolve('dmcloud');
	
	# The path the video you want to upload
	$res = $cloudkey->file->upload_file(__DIR__ . '/YOUR_VIDEO.mov');

	# The url of the uploaded video
	$source_url = $res->url;
	
	# The list of encoding assets that we want
	$assets = array('mp4_h264_aac', 'mp4_h264_aac_hq', 'jpeg_thumbnail_medium', 'jpeg_thumbnail_source');
	
	# A list of metadata we want to add to our media
	$meta = array('title' => 'my first video', 'author' => 'John Doe');
	
	# We can now start the publishing process
	$media = $cloudkey->media->create(array('assets_names' => $assets, 'meta' => $meta, 'url' => $source_url));
	
		
https://github.com/dailymotion/cloudkey-php

Questions @danielschniepp