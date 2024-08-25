<?php
	session_start();  
	include_once("../Models/usuarios.php");
	$objUsu = new Usuario();
	if($_SESSION['token'] == $_POST['codigo']){
		$objUsu->actualizarUsuario($_SESSION['info'][0]["idUsuario"],$_SESSION['info'][0]["Nombre"],$_SESSION['info'][0]["Apellidos"], $_SESSION['info'][0]["Fecha_Nacimiento"], $_SESSION["modinf"]["Tel"], $_SESSION["modinf"]["correo"]);

		$_SESSION["flagupdate"] = true;
		unset($_SESSION['modinf']);
 		unset($_SESSION["token"]);
		$_SESSION["info"] = json_decode($objUsu->setUsuario($_SESSION['info'][0]['idUsuario']), true);
		header("Location: ../Views/Informacion/perfilUsuario.php");
		die();
 	}else{
 		$_SESSION['flag'] = true;
 		header("Location: ../Views/Informacion/validarCorreoInfo.php");
 		die();
 	}
	
?>
