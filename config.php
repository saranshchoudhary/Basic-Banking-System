<?php

	$conn = mysqli_connect("localhost:3306" , "root" , "" , "indian_bank") or die("connection failed");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>