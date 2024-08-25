<?php 
	session_start();
	include_once("../Models/profesionales.php");
	include_once("../Models/usuarios.php");

	$objPro = new Profesional();
	$objUsu = new Usuario();

	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    function generate_string($input, $strength = 16) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $random_string;
    }
    $pass = generate_string($permitted_chars,10);
    $pass  = wordwrap($pass,70,"\r\n");
    $_SESSION["pass"] = $pass;
    $_SESSION["correo"] = $_POST['correo'];
	$objUsu->agregarUsuario($_POST['nombre'],$_POST['apellidop'].' '.$_POST['apellidom'], $_POST['fechan'], $_POST['tel'], $_POST['correo'], md5($pass));
	$profesional = json_decode($objUsu->obtenerUltUsuario(), true);
	$cedula = addslashes(file_get_contents($_FILES['cedula']['tmp_name']));
	$fecha = date("Y-m-d");

	$objPro->agregarProfesional($profesional[0]["idUsuario"], $cedula, $fecha);

	include_once("correoAlta.php");

?>