<?php
	$pathToRoot = "../";
	require_once($pathToRoot.'onedrive-php-sdk/vendor/onedrive-config.php');
	require_once($pathToRoot.'onedrive-php-sdk/vendor/autoload.php');

	session_start();

	// Clears the session and restarts the whole authentication process
	$_SESSION = array();
	use Onedrive\Client;
	// Instantiates a OneDrive client bound to your OneDrive application
	$onedrive = new Onedrive::Client(array(
	    'client_id' => ONEDRIVE_CLIENT_ID
	));

	// Gets a log in URL with sufficient privileges from the OneDrive API
	$url = $onedrive->getLogInUrl(array(
	    'wl.signin',
	    'wl.basic',
	    'wl.contacts_skydrive',
	    'wl.skydrive_update'
	), ONEDRIVE_CALLBACK_URI);

	// Persist the OneDrive client' state for next API requests
	$_SESSION['onedrive.client.state'] = $onedrive->getState();
?>