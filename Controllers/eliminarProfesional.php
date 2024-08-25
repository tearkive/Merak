<?php 
	session_start();
	include_once("../Models/profesionales.php");

	$objProf = new Profesional();

	$objProf->eliminarProfesional($_POST['profesional']);

	$_SESSION["flagepro"] = true;

	header("Location: ../Views/Administrador/eliminarProfesional.php");
	die();
?>