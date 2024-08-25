<?php 
	include_once("../Models/sellos.php");

	$objSellos = new Sello();

	$resultado = $objSellos->obtenerSellosU($_GET['idUsu']);

	echo $resultado;
?>