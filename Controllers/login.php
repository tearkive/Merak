<?php 
	session_start();
	include_once("../Models/usuarios.php");
	$objUsu = new Usuario();

	$usuVal = $objUsu->usuarioValido($_POST['email'], md5($_POST['pass']));
	if($usuVal){
		$_SESSION["info"] = json_decode($objUsu->obtenerUsuario($_POST['email'], md5($_POST['pass'])), true);
		if($objUsu->usuarioAdministrador($_SESSION['info'][0]["idUsuario"])){
			$_SESSION["tipo"] = 3;
			header("Location: ../Views/Informacion/principal.php");
			die();
		}elseif ($objUsu->usuarioProfesional($_SESSION['info'][0]["idUsuario"])) {
			$_SESSION["tipo"] = 1;
			header("Location: ../Views/Informacion/principal.php");
			die();
		}else{
			$_SESSION["tipo"] = 2;
			header("Location: ../Views/Informacion/principal.php");
			die();
		}
	}else{
		$_SESSION["flaglogin"] = true;
		header("Location: ../Views/Informacion/login.php");
			die();
	}
	
?>