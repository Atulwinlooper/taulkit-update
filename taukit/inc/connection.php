<?php
	$host = "localhost";
	$db = "project";
	$user = "root";
	$pass = "";

	$conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn) {
		die(("Conection Failed: ").mysqli_connnect_error());
	}
?>