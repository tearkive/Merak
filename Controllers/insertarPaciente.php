<?php
	session_start(); 
 	include_once("../Models/usuarios.php");
 	include_once("../Models/pacientes.php");
 	$objUsu = new Usuario();
 	$objPac = new Paciente();
 	$_SESSION['flag'] = false;
 	if($_SESSION['token'] == $_POST['codigo']){
 		if($objUsu->usuarioExiste($_SESSION['arrgloinfo']["correo"])){
 			unset($_SESSION['arrgloinfo']);
 			unset($_SESSION["token"]);
 			unset($_SESSION["correo"]);
 			$_SESSION['flagrep'] = true;
 			header("Location: ../Views/Informacion/registro.php");
 			die();
 		}else{
 			$objUsu->agregarUsuario($_SESSION['arrgloinfo']['nombre'],$_SESSION['arrgloinfo']['apellidop'].' '.$_SESSION['arrgloinfo']['apellidom'],$_SESSION['arrgloinfo']['fechan'],$_SESSION['arrgloinfo']['telefono'],$_SESSION['arrgloinfo']['correo'],$_SESSION['arrgloinfo']['pass']);
 			unset($_SESSION['arrgloinfo']);
 			unset($_SESSION["token"]);
 			unset($_SESSION["correo"]);
 			$_SESSION["info"] = json_decode($objUsu->obtenerUltUsuario(), true);
 			$_SESSION["tipo"] = 2;
 			$objPac->agregarPaciente($_SESSION["info"][0]["idUsuario"],"Poco frecuente");
 			header("Location: ../Views/Informacion/principal.php");
 			die();
 		}
 	}else{
 		$_SESSION['flag'] = true;
 		header("Location: ../Views/Informacion/validarCorreo.php");
 		die();
 	}
 ?>