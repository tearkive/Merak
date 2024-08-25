<?php 
	include_once("../Models/citas.php");
	$objCita = new Cita();

	$resultado = $objCita->obtenerCitasPUsu($_GET['paci']);
	
	echo $resultado;
	
?>