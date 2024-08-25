<?php
	session_start();  
	include_once("../Models/usuarios.php");
	$objUsu = new Usuario();
	if($_SESSION['token'] == $_POST['codigo']){
		$objUsu->actualizarPass($_SESSION['correo'],md5($_SESSION['password']));

		$_SESSION["flagupdate"] = true;
 		if(!isset($_SESSION['info'])){
 			$_SESSION["info"] = json_decode($objUsu->obtenerUsuario($_SESSION['correo'], md5($_SESSION['password'])), true);
 		}
 		unset($_SESSION['correo']);
		unset($_SESSION['password']);
 		unset($_SESSION["token"]);
 		if ($objUsu->usuarioProfesional($_SESSION['info'][0]["idUsuario"])) {
			$_SESSION["tipo"] = 1;
			header("Location: ../Views/Informacion/perfilUsuario.php");
			die();
		}else{
			$_SESSION["tipo"] = 2;
			header("Location: ../Views/Informacion/perfilUsuario.php");
			die();
		}
 	}else{
 		$_SESSION['flag'] = true;
 		header("Location: ../Views/Informacion/validarCorreoInfo.php");
 		die();
 	}
	
?>
