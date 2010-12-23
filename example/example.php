<?php
/**
 * @copyright  Copyright 2010 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Frank Angermann
 *
 * DESCRIPTION: This example shows how to send requests to the API instead of receiving them via the callback URL.
 * 				Sending requests are necessary for creating channel notifications or encrypting models.
 *
 *				Please see http://www.junaio.com -> developer -> api for further information or contact us at developer@junaio.com
 **/
require_once realpath(dirname(dirname(__FILE__))) . '/library/client.php';

$oJunaioClient = new JunaioApiClient();

try {

	$oResponse = $oJunaioClient->request(
		'/channels/notifications/create/[YOUR_CHANNEL_ID]/',
		'POST',
		array(
			'text' => 'Your message to subscribers of your channel'			
		),
		array(
			'username' => 'password'
		)
	);

	// Zend response
	var_dump($oResponse);

} catch (Exception $e) {
	echo $e->getMessage();
}