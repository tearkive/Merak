<?php
	session_start(); 
	include_once("../Models/citas.php");
	$objCitas = new Cita();

	if($_POST['hora'] == 0){
		$_SESSION["flagcita"] = true;
		header("Location: ../Views/Pacientes/editarC.php?idPed={$_POST['idCita']}");
		die();
	}else{
		$mañana = date("Y-m-d");
		$hoy = date("Y-m-d",strtotime($fecha."- 1 days"));
		if($_POST["fecha"] != $hoy && $_POST['fecha'] != $mañana){
			$objCitas->actualizarCita($_POST['idCita'], $_POST['idUsuario'], $_POST['fecha'], $_POST['hora'], "Pendiente",1);
			$_SESSION["flagcc"] = true;
			header("Location: ../Views/Profesionales/editarCitas.php");
			die();
		}else{
			$objCitas->actualizarCita($_POST['idCita'], $_POST['idUsuario'], $_POST['fecha'], $_POST['hora'], "Pendiente",0);
			$_SESSION["flagcc"] = true;
			header("Location: ../Views/Profesionales/editarCitas.php");
			die();
		}

	}
?>