<?php 
	include_once("../Models/citas.php");
	$objCita = new Cita();

	$resultado = $objCita->obtenerCitaPF($_GET['fecha']);
	
	echo $resultado;
	
?>