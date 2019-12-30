<?php
	$server = "127.0.0.1";  // localhost
	$db_user = "root";
	$db_password = "";
	$db_name = "hosp";
	
	$dbcon = new mysqli($server, $db_user, $db_password, $db_name);
	
	// check connection
	if ($dbcon -> connect_error) {
		echo "failed connection: " . $dbcon->connect_error;
		exit;
	}