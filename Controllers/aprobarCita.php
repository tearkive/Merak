<?php 
	include_once("../Models/citas.php");
	include_once("../Models/sellos.php");
	include_once("../Models/recompensas.php");
	$objCitas = new Cita();
	$objSellos = new Sello();
	$objRecomp = new Recompensa();

	$objCitas->actualizarEstado($_GET["idCita"], "Atendida");
	$idUsu = json_decode($objCitas->obtenerUsuPidCit($_GET['idCita']), true);
	$fecha = date("Y-m-d");
	$cantidadsellos = json_decode($objSellos->cantidadSellosByUsu($idUsu[0]["idUsuario"]),true);
	if($cantidadsellos[0]["Cantidad_Sellos"] < 10){
		$objSellos ->agregarSellos($_GET['idCita'], $fecha);
		$cantidadsellos = json_decode($objSellos->cantidadSellosByUsu($idUsu[0]["idUsuario"]),true);
		switch ($cantidadsellos[0]["Cantidad_Sellos"]) {
				case 3:
					$objRecomp->agregarRecompensas($idUsu[0]["idUsuario"], 1);
					break;
				case 6:
					$objRecomp->agregarRecompensas($idUsu[0]["idUsuario"], 2);
					break;
				case 9:
					$objRecomp->agregarRecompensas($idUsu[0]["idUsuario"], 3);
					break;
			}	
	}
	header("Location: ../Views/Profesionales/historialCitas.php");
	die();
?>