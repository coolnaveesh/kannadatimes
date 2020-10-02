<?php
	$conn = new mysqli('localhost', 'root', '', 'kannadatimes');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>