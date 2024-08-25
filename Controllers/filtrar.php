<?php 
	include_once("../Models/citas.php");
	$objCit = new Cita();

	$resultado = $objCit->obtenerTodasCitas();

	echo $resultado;

?>