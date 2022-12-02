<?php

	include 'conexion.php';
	
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	
	$connect->query("UPDATE usuarios SET username='".$username."', password='".$password."', role='".$role."' WHERE id=". $id);

?>