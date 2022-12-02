<?php

	include 'conexion.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	
	
	$connect->query("INSERT INTO usuarios (username,password,role) VALUES ('".$username."','".$password."','".$role."')")

?>