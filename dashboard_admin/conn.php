<?php
	$conn = new mysqli('localhost', 'root', 'bocahaleg', 'taman_asri');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>