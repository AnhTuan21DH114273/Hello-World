<?php
	$conn = new mysqli('localhost', 'root', '', 'WebLMS');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>