<?php
	include 'conexion.php';
	$id=$_POST['id'];
	$connect->query("DELETE FROM vacante WHERE id=".$id);

?>