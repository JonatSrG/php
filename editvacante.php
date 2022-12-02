<?php

	include 'conexion.php';
	
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$descricion = $_POST['descricion'];
	$empresa = $_POST['empresa'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$direccion = $_POST['direccion'];
	$nombrerh = $_POST['nombrerh'];
	$image = $_POST['image'];

	
	$connect->query("UPDATE vacante SET titulo='".$titulo."', descricion='".$descricion."', empresa='".$empresa."', telefono='".$telefono."', correo='".$correo."', direccion='".$direccion."', nombrerh='".$nombrerh."', image='".$image."' WHERE id=". $id);

?>