<?php

	include 'conexion.php';
	
	$titulo = $_POST['titulo'];
	$descricion = $_POST['descricion'];
	$empresa = $_POST['empresa'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$direccion = $_POST['direccion'];
	$nombrerh = $_POST['nombrerh'];
	$image = $_POST['image'];
	
	
	$connect->query("INSERT INTO vacante (titulo,descricion,empresa,telefono,correo,direccion,nombrerh,image) VALUES ('".$titulo."','".$descricion."','".$empresa."','".$telefono."','".$correo."','".$direccion."','".$nombrerh."','".$image."')")

?>