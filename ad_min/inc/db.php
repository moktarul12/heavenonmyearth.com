<?php

	$db_host = "localhost";
	$db_user = "razorbee";
	$db_pass = "Test135#";
	$db_name = "rb_heaven";

	$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	// Check connection
	if (mysqli_connect_errno()) {
	  // echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  echo "<h1>Failed to connect to DB</h1>";
	  die();
	}

?>