<?php
/**
 * @copyright  Copyright 2009 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Bernhard Heindl
 **/

require_once '../config/config.php';
require_once '../library/junaio.class.php';

// Check junaio authentication header
// Settings for the authentication can be found in config.php
if (!Junaio::checkAuthentication()) {
	header('HTTP/1.0 401 Unauthorized');
	exit;
}

//if issues occur with htaccess, also the path variable can be used
//
//htaccess rewrite enabled:
//Callback URL: http://www.callbackURL.com
//
//htacces diabled:
//Callback URL: http://www.callbackURL.com/?path=
 
if(isset($_GET['path']))
	$path = $_GET['path'];
else
	$path = $_SERVER['REQUEST_URI'];
	
$aUrl = explode('/', $path);

$xmlFilePoisSearchPath = "http://dl.dropbox.com/u/5529462/pois_glue_search.xml";
$xmlFilePoisEventPath = "$xmlFilePoisSearchPath";

 if(in_array('pois', $aUrl))
 {
 	//	include '../src/search_glue.php';
 	//	exit;
 	  if(in_array_substr('search', $aUrl))
     {
        echo file_get_contents($xmlFilePoisSearchPath);
        exit;
     }
     else if(in_array_substr('event', $aUrl))
     {
        echo file_get_contents($xmlFilePoisEventPath);
        exit;
     }	
 }

// Wrong url
header('HTTP/1.0 404 Not found');

function in_array_substr($needle, $haystack)
{
	foreach($haystack as $value)
	{
		if(strpos($value, $needle) !== false)
			return true;
	}
	
	return false;	
}
