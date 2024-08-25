<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>Merak Testimonio</title>
</head>
<body>
	<?php
		session_start();
		include_once("../Plantillas/Navegador.php"); 
	?>
	<main>
		<div class="carrusel">
			Aqui va un carrusel de imagenes
		</div>
		<div class="reserva-cita">
			<p class="titulo-negro">Merak: quiropractica y fisoterapia</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			<a href="../Pacientes/programarCita.php"><button>Reserva tu cita ahora</button></a>
		</div>
		<div class="nuestros-tratamientos">
			<p class="titulo-negro">Nuestros tratamientos</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
		</div>
		<div class="conocenos">
			<p class="titulo-negro">La certeza de estar en las mejores manos</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>
		<div class="testimonios">
			<p class="titulo-negro">Qué opinan nuestros pacientes</p>
		</div>
	</main>
	<?php include_once("../Plantillas/Footer.html"); ?>
</body>
</html>