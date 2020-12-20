<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("raufhussle.c7apijsslqfc.us-east-1.rds.amazonaws.com", "abdul", "12345678", "SLOTIFY");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>