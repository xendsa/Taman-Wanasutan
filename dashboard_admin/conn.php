<?php
	$conn = new mysqli('localhost', 'root', '', 'taman');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>