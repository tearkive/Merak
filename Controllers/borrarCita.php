<?php 
	include_once("../Models/citas.php");
	$objCitas = new Cita();

	$objCitas->cancelarCita($_GET['idCita'],"Cancelada",0);

	$_SESSION["flagcc"] = true;
	if($_SESSION["tipo"] == 1){
		header("Location: ../Views/Profesionales/historialCitas.php");
		die();
	}else{
		header("Location: ../Views/Pacientes/historialCitas.php");
		die();
	}

?>