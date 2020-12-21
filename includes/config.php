<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("musicstream.c7apijsslqfc.us-east-1.rds.amazonaws.com", "abdul", "12345678", "rauph_hussle");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>