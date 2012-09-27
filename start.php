<?php
/**
 * @author Daniel Schniepp < http://daniel-schniepp.com/ >
 * @copyright 2012 daniel-schniepp.com
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package DMCloud Medie / File API (Laravel Bundle)
 * @version 1.0 - 2012-09-27
 */

Autoloader::map(array(
	'CloudKey' => Bundle::path('dmcloud').'libraries/CloudKey.php',
));

Laravel\IoC::singleton('dmcloud', function()
{
    $user_id = Config::get('dmcloud.user_id');
    $api_key = Config::get('dmcloud.api_key');           

	return new CloudKey($user_id, $api_key);
});