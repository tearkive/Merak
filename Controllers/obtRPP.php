<?php 
	include_once("../Models/recompensas.php");

	$objRecomp = new Recompensa();

	$resultado = $objRecomp->verRecompensasPUsu($_GET['idUsu']);

	echo $resultado;
?>