<?php

// Database Information
$host = 'localhost';						// Your host, usually "localhost"
$dbName = 'cl54-dashboard';			// The database name
//$dbUser = 'cl54-dashboard';		// The database username
//$dbPass = 'NK/h6wjXs';				// The database password
$dbUser = 'root';
$dbPass = 'root';

// User Information
$admin_user = 'sidelsky';				// Set your username
$admin_password = '1ph0n33g';			// Set your password

/*
	To prevent other WP Status Dashboard users from adding one of
	your websites to their own dashboard, we've instituted this "security
	key" feature. Simply put your own custom security key here to add it.
	NOTE: You'll need to go to each of your clients' plugin settings and
	add the key there as well for it to have access to the information.
*/

$security_key = 'squie2010';				// REQUIRED since v1.2 - Letter and Numbers ONLY!

include('functions.php');
include('wpsd_status.php');

?>